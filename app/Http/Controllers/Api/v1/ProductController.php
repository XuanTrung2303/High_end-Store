<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search1(){
        $keywords = $_GET['key_cate_id'];
        $category = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::where('product_category_id','=',$keywords)->get();
        if(count($products)!=0){
            return view('admin.products.index')->with(compact('products','category','brands'));
        }
        else if (count($products)==0){
            $products = Product::all();
            return view('admin.products.index')->with(compact('products','category','brands'));
        }
    }

    public function search2(){
        $keywords = $_GET['key_brand_id'];
        $category = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::where('brand_id','=',$keywords)->get();
        if(count($products)!=0){

            return view('admin.products.index')->with(compact('products','category','brands'));
        }
        else if (count($products)==0){
            $products = Product::all();
            return view('admin.products.index')->with(compact('products','category','brands'));
        }
    }

    public function index()
    {
        $category = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::all();
        return view('admin.products.index')->with(compact('products','category','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $category = CategoryProduct::all();
        $brands = Brand::all();
        return view('admin.products.create')->with(compact('category', 'brands'));
    }
    public function store(Request $request)
    {
        $products = new Product();
        $products->brand_id = $request->brand_id;
        $products->product_category_id = $request->product_category_id;
        $products->name_product = $request->name_product;
        $products->description = $request->description;
        if($request['image_product']){
            $image = $request['image_product'];
           // dd($ext);
            $name =  time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $products -> image_product = $name;

        }else{
            $products -> image_product = 'default.png';
        }
        $products->price = $request->price;
        $products->amount = $request->amount;
        $products->discount_code = $request->discount_code;
        $products->weight = $request->weight;
        $products->cate = $request->cate;
        $products->save();
        return redirect()->route('products.index')->with('success', 'Bạn đã thêm sản phẩm thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = CategoryProduct::all();
        $brands = Brand::all();
        $products = Product::find($id);
        return view('admin.products.show')->with(compact('products','brands','category')); // Khai báo biến được gắn giá trị đến Model khóa ngoại
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
        $products = Product::find($id);
        $products->brand_id = $request->brand_id;
        $products->product_category_id = $request->product_category_id;
        $products->name_product = $request->name_product;
        $products->description = $request->description;
        if($request['image_product']){
            $image = $request['image_product'];

           // dd($ext);
            $name =  time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $products -> image_product = $name;

        }else{
            $products -> image_product = 'default.png';
        }
        $products->price = $request->price;
        $products->amount = $request->amount;
        $products->discount_code = $request->discount_code;
        $products->weight = $request->weight;
        $products->cate = $request->cate;
        $products->save();
        return redirect()->route('products.index')->with('success', 'Bạn đã cập nhật sản phẩm thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Bạn đã xóa sản phẩm thành công !!!');
    }
}
