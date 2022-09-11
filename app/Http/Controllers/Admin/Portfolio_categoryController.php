<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioCategoryCreateRequest;
use App\Http\Requests\PortfolioCategoryEditRequest;
use App\Models\Portfolio_category;
use Carbon\Carbon;


class Portfolio_categoryController extends Controller
{

    public function index()
    {
        return view('admin.portfolio-categories.index', [
            'portfolio_categorys' => Portfolio_category::paginate(10),
        ]);
    }

    // insert page
    public function portfolio_category_add()
    {
        return view('admin.portfolio-categories.create');
    }

    // insert
    public function insert(PortfolioCategoryCreateRequest $req)
    {
        $name = $req->name;
        $status = $req->status;
        $created_at = Carbon::now();

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
        return view('admin.portfolio-categories.edit', [
            'portfolio_categorys' => Portfolio_category::find($id),
        ]);
    }

    // edit
    public function edit(PortfolioCategoryEditRequest $req)
    {
        $id = $req->id;
        $name = $req->name;
        $status = $req->status;

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
