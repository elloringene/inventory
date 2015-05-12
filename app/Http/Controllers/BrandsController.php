<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Brand;

class BrandsController extends Controller {

    public function index()
    {
        $brands = Brand::get();
        return view('brands.index' , compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function add(Request $request)
    {
        $brand = $request->input();
        $slug = Str::slug($request->get('name'));
        $brand['slug'] = $slug;

        Brand::create($brand);
        return redirect('brands');
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
//        dd($slug);
        $brand = Brand::where('id', $id)->first();
        return view('brands.edit' , compact('brand'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $brand = Brand::where('id',$id)->first();
        $brand->fill($request->input())->save();

        return redirect('brands');
    }

    public function destroy($id)
    {
        //
    }
}
