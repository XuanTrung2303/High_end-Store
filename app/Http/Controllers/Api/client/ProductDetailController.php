<?php

namespace App\Http\Controllers\Api\client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $product = Product::all();
        $products = Product::with('category_product')->where('id', $id)->first();
        foreach($products as $key =>$product){
            $category_id = $products->product_category_id;
        }
        $brands = Brand::all();
        $categories = CategoryProduct::all();
        $product_related = Product::with('category_product')->where('product_category_id',  $category_id)->whereNotIn('id',[$id])->orderBy(DB::raw('RAND()'))->limit(5)->get();
        return view('client.product.product_detail')->with(compact('products','categories','brands','product_related'));
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
