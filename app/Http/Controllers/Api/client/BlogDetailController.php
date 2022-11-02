<?php

namespace App\Http\Controllers\Api\client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $blog_id = $id;
        $blog_comment = new BlogComment();
        $blogs = Blog::find($id);
        $blog_comment->blog_id = $blog_id;
        $blog_comment->user_id = Auth::user()->id;
        $blog_comment->messages = $request->messages;
        $blog_comment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $commblog = BlogComment::all();
        $blogs = Blog::all();
        $blog = Blog::find($id);
        $comm = BlogComment::where('blog_id','=', $blog->id)->get();
        $countcomment = BlogComment::all()->where('blog_id','=', $blog->id)->count();
        return view('client.blog.blog_detail')->with(compact('blogs','commblog','blog','comm','countcomment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
