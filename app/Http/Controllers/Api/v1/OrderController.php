<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
class OrderController extends Controller
{
    public function search4(){
        $keywords = $_GET['key_user_id'];
        $users = User::all();
        $orders = Order::where('id','=',$keywords)->get();
        if(count($orders)!=0){
            return view('admin.orders.index')->with(compact('users','orders'));
        }
        else if (count($orders)==0){
            $orders = Order::all();
            return view('admin.orders.index')->with(compact('users','orders'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $orders = Order::all();
        return view('admin.orders.index')->with(compact('users','orders'));
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
        $orders = Order::find($id);
        // điều hướng đến view edit category và truyền sang dữ liệu về category muốn sửa đổi
        return view('admin.orders.show')->with(compact('orders'));
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
        $data = $request->all();
        // Tìm đến đối tượng muốn update
        $orders = Order::find($id);
        // gán dữ liệu gửi lên vào biến data
        $orders->order_status = $request->order_status;
        $orders->save();
        // Update user
        return redirect()->route('orders.index')->with('success',' bạn đã cập nhật trạng thái đơn hàng thành công !!!');
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect()->route('orders.index')->with('success', 'Bạn đã xóa đơn hàng thành công !!!');
    }
}
