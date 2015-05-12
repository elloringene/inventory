<?php
namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str as Str;

use Illuminate\Http\Request;

class CategoriesController extends Controller {

    public function index()
    {
        $categories = Category::get();
        return view('categories.index' , compact('categories'));
    }

    public function create()
    {
        //
        $categories = array('Products' => 'Products','Suppliers' => 'Suppliers');
        return view('categories.create' , compact('categories'));
    }

    public function add(Request $request)
    {
        $product = $request->input();
        $product['slug'] = Str::slug($request->input('name'));
        Category::create($product);
        return redirect('categories');
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $categories = array('Products' => 'Products','Suppliers' => 'Suppliers');
        return view('categories.edit' , compact('category' , 'categories'));
    }

    public function update(Request $request)
    {
        $slug = $request->input('slug');
        $product = Category::where('slug',$slug)->first();
        $product->fill($request->input());
        $product->fill($request->input())->save();

        return redirect('categories');
    }

    public function destroy($id)
    {
        //
    }

}
