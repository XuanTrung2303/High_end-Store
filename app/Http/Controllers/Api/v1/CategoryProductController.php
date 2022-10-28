<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        return view('admin.categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // tạo một biến $categories lấy dữ liệu từ model CategoryProduct
        $categories = new CategoryProduct();
        // gán dữ liệu gửi lên vào biến data
        $categories->name_category = $request->name_category;
        $categories->description = $request->description;
        $categories->save();
        // dd($request);
        return redirect()->route('categories.index')->with('success',' bạn đã thêm danh mục sản phẩm thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = CategoryProduct::find($id);
        // điều hướng đến view edit category và truyền sang dữ liệu về category muốn sửa đổi
        return view('admin.categories.show')->with(compact('categories'));
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
        $categories = CategoryProduct::find($id);
        // gán dữ liệu gửi lên vào biến data
        $categories->name_category = $request->name_category;
        $categories->description = $request->description;
        $categories->save();
        // Update user
        return redirect()->route('categories.index')->with('success',' bạn đã cập nhật danh mục sản phẩm thành công !!!');
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
        $categories = CategoryProduct::find($id);
        $categories->delete();
        return redirect()->route('categories.index')->with('success',' bạn đã xóa danh mục sản phẩm thành công !!!!');
    }
}
