<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesignationCreateRequest;
use App\Http\Requests\DesignationEditRequest;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DesignationController extends Controller
{

    public function index()
    {
        return view('admin.designations.index', [
            'designations' => Designation::paginate(10),
        ]);
    }


    public function create()
    {
        return view('admin.designations.create');
    }


    public function store(DesignationCreateRequest $request)
    {
         $inputs = $request->only('designation_name');

        try{
            Designation::create($inputs);
            Session::flash('success', 'You are success to add your item');
            return back()->with('success', 'Data is Added Successfull');
        }catch (\Exception $exception){
            Session::flash('error',$exception->getMessage());
            return back();
        }

    }


    public function edit($id)
    {
        return view('admin.designations.edit', [
            'designations' => Designation::find($id),

        ]);
    }

    public function update(DesignationEditRequest $req,$id)
    {
        Designation::find($id)->update([
            "designation_name" => $req->designation_name,
        ]);
        return back()->with('success', 'Data is Updated Successfull');
    }


    public function destroy($id)
    {
        Designation::find($id)->forceDelete();
        return back()->with('success', 'Data is Deleted Successfull');
    }
}
