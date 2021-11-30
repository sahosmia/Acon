<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // view page
    public function index()
    {
        return view('admin.designation', [
            'designations' => Designation::paginate(10),
        ]);
    }

    // insert page
    public function designation_add_page()
    {
        return view('admin.designation_add');
    }

    // insert
    public function insert(Request $req)
    {
        $req->validate([
            'designation_name' => 'required',
        ]);

        Designation::insert([
            "designation_name" => $req->designation_name,

        ]);
        return back()->with('success', 'Data is Added Successfull');
    }

    // edit page
    public function edit_page($id)
    {
        return view('admin.designation_edit', [
            'designations' => Designation::find($id),

        ]);
    }

    // edit
    public function edit(Request $req)
    {
        $req->validate([
            'designation_name' => 'required',
        ]);

        Designation::find($req->id)->update([
            "designation_name" => $req->designation_name,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
    }

    // delete
    public function delete($id)
    {
        Designation::find($id)->forceDelete();
        return back()->with('success', 'Data is Deleted Successfull');
    }
}
