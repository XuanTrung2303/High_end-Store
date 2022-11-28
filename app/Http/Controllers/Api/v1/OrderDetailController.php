<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{


    public function search5(){
        $keywords = $_GET['key_pro_id'];
        $products = Product::all();
        $orderdetails = OrderDetail::where('id','=',$keywords)->get();
        if(count( $orderdetails)!=0){
            return view('admin.orderdetails.index')->with(compact('products','orderdetails'));
        }
        else if (count( $orderdetails)==0){
             $orderdetails = OrderDetail::all();
            return view('admin.orderdetails.index')->with(compact('products','orderdetails'));
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $products = Product::all();
        $orders = Order::find($id);
        $orderdetails = OrderDetail::find($id);
        return view('admin.orderdetails.index')->with(compact('products','orders', 'orderdetails'));
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
        $orderdetails = OrderDetail::find($id);
        $orderdetails->delete();
        return redirect()->route('orderdetails.index')->with('success', 'Bạn đã xóa sản phẩm thành công !!!');
    }
}
