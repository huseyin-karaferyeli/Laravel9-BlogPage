<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comment::all();

        return view('admin.comment.main', [
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Comment::find($id);

        return view('admin.comment.show', [
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Comment::find($id);

        $data -> delete();

        $datalist = Comment::all();

        return view('admin.comment.main', [
            'data' => $datalist
        ]);
    }

    public function update($id){
        $data = Comment::find($id);

        if($data -> status == 'False'){
            $data -> status = 'True';
        }
        else if($data -> status == 'True'){
            $data -> status = 'False';
        }
        else{
            $data -> status = 'False';
        }

        $data -> save();

        $datalist = Comment::all();

        return view('admin.comment.main', [
            'data' => $datalist
        ]);
    }
}
