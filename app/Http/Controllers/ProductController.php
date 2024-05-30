<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function store(Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','Product has created successfully');
    }
    public function manage()
    {
        return view('product.manage',['lists'=>Product::all()]);
    }
    public function edit($id)
    {
        return view('product.edit',['list'=> Product::find($id)]);
    }
    public function update(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message','Product info has updated Successfully');
    }
    public  static function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message','Product info has deleted Successfully');

    }
}
