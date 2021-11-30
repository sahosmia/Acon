<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view('admin.comment', [
            'comment' => Comment::find(1),
        ]);
    }

    // edit
    public function edit(Request $request){
        $id = 1;

        $request->validate([
            'code_body' => 'required',
        ]);

        Comment::find($id)->update([
            "code_body" => $request->code_body,
        ]);
        return back()->with('success', 'Data is Updated Successfull');

    }
}
