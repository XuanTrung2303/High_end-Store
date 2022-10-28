<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CommentProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CommentProductController extends Controller
{

    public function search6(){
        $keywords = $_GET['key_user_id'];
        $users = User::all();
        $products = Product::all();

        $comment_products = CommentProduct::where('id','=',$keywords)->get();
        if(count($comment_products)!=0){
            return view('admin.comment_product.index')->with(compact('users','comment_products','products'));
        }
        else if (count($comment_products)==0){
            $comment_products = CommentProduct::all();
            return view('admin.comment_product.index')->with(compact('users','comment_products','products'));
        }
    }

    public function search7(){
        $keywords = $_GET['key_pro_id'];
        $products = Product::all();
        $users = User::all();

        $comment_products = CommentProduct::where('id','=',$keywords)->get();
        if(count( $comment_products)!=0){
            return view('admin.comment_product.index')->with(compact('products','comment_products','users'));
        }
        else if (count( $comment_products)==0){
             $comment_products = CommentProduct::all();
            return view('admin.comment_product.index')->with(compact('products','comment_products','users'));
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment_products = CommentProduct::all();
        $users = User::all();
        $products = Product::all();
        return view ('admin.comment_product.index')->with(compact('comment_products', 'users', 'products'));

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
        $comment_products = CommentProduct::find($id);
        $comment_products->delete();
        return redirect()->route('comment_products.index')->with('success', 'Bạn đã xóa sản phẩm thành công !!!');
    }
}
