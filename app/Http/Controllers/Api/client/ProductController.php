<?php

namespace App\Http\Controllers\Api\client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(){
        $keywords = $_GET['key_cate_id'];
        $categories = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::where('product_category_id','=',$keywords)->get();
        if(count($products)!=0){
            return view('client.product.product')->with(compact('products','categories','brands'));
        }
        else if (count($products)==0){
            $products = Product::all();
            return view('client.product.product')->with(compact('products','categories','brands'));
        }
    }

    public function search11(){
        $keywords = $_GET['key_brand_id'];
        $categories = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::where('brand_id','=',$keywords)->get();
        if(count($products)!=0){

            return view('client.product.product')->with(compact('products','categories','brands'));
        }
        else if (count($products)==0){
            $products = Product::all();
            return view('client.product.product')->with(compact('products','categories','brands'));
        }
    }
    public function index()
    {
        $categories = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('client.product.product')->with(compact('products','categories','brands'));
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
        $categories = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::find($id);
        return view('client.product.product_detail')->with(compact('products','brands','categories'));
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
