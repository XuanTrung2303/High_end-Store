<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index')->with(compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create() {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $brands = new Brand();
        $brands->name_brands = $request->name_brands;
        $brands->description = $request->description;
        $brands->save();
        return redirect()->route('brands.index')->with('success' ,'Bạn đã thêm thương hiệu thành công!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::find($id);
        return view('admin.brands.show')->with(compact('brands'));

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
        $brands = Brand::find($id);
        $brands->name_brands = $request->name_brands;
        $brands->description = $request->description;
        $brands->save();
        return redirect()->route('brands.index')->with('success', 'Bạn đã cập nhật thương hiệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->route('brands.index')->with('success', 'Bạn đã xóa thương hiệu thành công !!!');
    }
}
