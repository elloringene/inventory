<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
class UsersController extends Controller {

    public function index()
    {
        $users = User::get();
        return view('users.index' , compact('users'));
    }

    public function create()
    {
        $categories = Category::where('for','Products')->lists('name','id');
        $brands = Brand::lists('name','id');
        return view('products.create' , compact('categories','brands'));
    }

    public function add(Request $request)
    {
        $product = $request->input();
        $product['slug'] = Str::slug($request->input('name'));
        Product::create($product);
        return redirect('products');
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::where('for','Products')->lists('name','id');
        $brands = Brand::lists('name','id');
        return view('products.edit' , compact('product','categories','brands'));
    }

    public function update(Request $request)
    {
        $slug = $request->input('slug');
        $product = Product::where('slug',$slug)->first();
//        dd($product);
        $product->fill($request->input())->save();

        return redirect('products');
    }

    public function destroy($id)
    {
        //
    }

}
