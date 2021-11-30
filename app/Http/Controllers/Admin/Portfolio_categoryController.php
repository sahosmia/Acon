<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Portfolio_category;
use Illuminate\Http\Request;
use Carbon\Carbon;


class Portfolio_categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.portfolio_category', [
            'portfolio_categorys' => Portfolio_category::paginate(10),
        ]);
    }

    // insert page
    public function portfolio_category_add()
    {
        return view('admin.portfolio_category_add');
    }

    // insert
    public function insert(Request $req)
    {
        $name = $req->name;
        $status = $req->status;
        $created_at = Carbon::now();

        $req->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        Portfolio_category::insert([
            "name" => $name,
            "status" => $status,
            "created_at" => $created_at,
        ]);
        return back()->with('success', 'You are success to add portfolio category item');
    }

    // edit page
    public function edit_page($id)
    {
        return view('admin.portfolio_category_edit', [
            'portfolio_categorys' => Portfolio_category::find($id),
        ]);
    }

    // edit
    public function edit(Request $req)
    {
        $id = $req->id;
        $name = $req->name;
        $status = $req->status;

        $req->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        Portfolio_category::find($id)->update([
            "name" => $name,
            "status" => $status,
        ]);
        return back()->with('success', 'You are success to update portfolio category item');
    }

    // p_delete single
    public function delete($id)
    {
        Portfolio_category::find($id)->forceDelete();
        return back()->with('error', 'You are success delete your portfolio category');
    }
}
