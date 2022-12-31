<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\User;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{

    // public function search8(){
    //     $keywords = $_GET['key_user_id'];
    //     $users = User::all();
    //     $blogs = Blog::all();

    //     $comment_blogs = BlogComment::where('id','=',$keywords)->get();
    //     if(count($comment_blogs)!=0){
    //         return view('admin.comment_blog.index')->with(compact('users','comment_blogs','blogs'));
    //     }
    //     else if (count($comment_blogs)==0){
    //         $comment_blogs = BlogComment::all();
    //         return view('admin.comment_blog.index')->with(compact('users','comment_blogs','blogs'));
    //     }
    // }

    // public function search9(){
    //     $keywords = $_GET['key_blog_id'];
    //     $blogs = Blog::all();
    //     $users = User::all();

    //     $comment_blogs = BlogComment::where('id','=',$keywords)->get();
    //     if(count( $comment_blogs)!=0){
    //         return view('admin.comment_blog.index')->with(compact('blogs','comment_blogs','users'));
    //     }
    //     else if (count( $comment_blogs)==0){
    //          $comment_blogs = BlogComment::all();
    //         return view('admin.comment_blog.index')->with(compact('blogs','comment_blogs','users'));
    //     }
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment_blogs = BlogComment::orderby('id', 'DESC')->paginate(15);
        $users = User::all();
        $blogs = Blog::all();
        return view ('admin.comment_blog.index')->with(compact('comment_blogs', 'users', 'blogs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $comment_blogs = BlogComment::find($id);
        $comment_blogs->delete();
        return redirect()->route('comment_blogs.index')->with('messages', 'Bạn đã xóa bình luận thành công !!!');
    }
}
