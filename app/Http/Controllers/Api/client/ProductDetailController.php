<?php

namespace App\Http\Controllers\Api\client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CategoryProduct;
use App\Models\CommentProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::all();
        $brands = Brand::all();
        $product = Product::all();
        return view('client.product.product_detail')->with(compact('product','categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $pro_id = $id;
        $product_comment = new CommentProduct();
        $product = Product::find($id);
        $product->save();
        $product_comment->product_id = $pro_id;
        $product_comment->user_id = Auth::user()->id ;
        $product_comment->massages = $request->massages;
        $product_comment->rating = $request->rating;
        if ($request->rating > 0) {
            $product_comment->rating = $request->rating;
        } else {
            $product_comment->rating = 1;
        }


        $product_comment->save();

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
        $product = Product::all();
        $products = Product::find($id); //view sp
        $comm = CommentProduct::where('product_id','=', $products->id)->get();
        foreach($products as $key =>$product){
            $category_id = $products->product_category_id;
        }
        $brands = Brand::all();
        $categories = CategoryProduct::all();
        $countcomment = CommentProduct::all()->where('product_id','=', $products->id)->count();
        $countall = CommentProduct::all()->where('product_id','=', $products->id)->count();
        $count5 = CommentProduct::all()->where('product_id','=', $products->id)->where('rating', '=', 5)->count();
        $count4 = CommentProduct::all()->where('product_id','=', $products->id)->where('rating', '=', 4)->count();
        $count3 = CommentProduct::all()->where('product_id','=', $products->id)->where('rating', '=', 3)->count();
        $count2 = CommentProduct::all()->where('product_id','=', $products->id)->where('rating', '=', 2)->count();
        $count1 = CommentProduct::all()->where('product_id','=', $products->id)->where('rating', '=', 1)->count();

        $product_related = Product::with('category_product')->where('product_category_id',  $category_id)->whereNotIn('id',[$id])->orderBy(DB::raw('RAND()'))->limit(5)->get();

        if ($countall) {
            $tong = ($count5*5+$count4*4+$count3*3+$count2*2+$count1*1)/$countall;
            $Round = round($tong, 1); // bỏ một số phía sau dấu phẩy
            return view('client.product.product_detail')->with(compact('products', 'product','categories','brands','product_related','comm','Round','countcomment'));
        } else {
            $Round = 0;
            return view('client.product.product_detail')->with(compact('products', 'product','categories','brands','product_related','comm','Round','countcomment'));
        }

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

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}
