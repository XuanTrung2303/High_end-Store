<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index')->with(compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        if($request['image']){
            $image = $request['image'];
            $name =  time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $blogs -> image = $name;
        }else{
            $blogs -> image = 'default.png';
        }
        $blogs ->save();
        return redirect()->route('blogs.index')->with('success', 'Bạn đã thêm bài viết thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::find($id);
        return view('admin.blogs.show')->with(compact('blogs'));
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
        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        if($request['image']){
            $image = $request['image'];
            $name =  time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $blogs -> image = $name;
        }else{
            $blogs -> image = 'default.png';
        }
        $blogs ->save();
        return redirect()->route('blogs.index')->with('success', 'Bạn đã cập nhật bài viết thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->route('blogs.index')->with('success', 'Bạn đã xóa bài viết thành công !!!');
    }
}
