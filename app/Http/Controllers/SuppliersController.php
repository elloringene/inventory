<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Supplier;

class SuppliersController extends Controller {

    public function index()
    {
        $suppliers = Supplier::get();
        return view('suppliers.index' , compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function add(Request $request)
    {
        $supplier = $request->input();
        Supplier::create($supplier);
        return redirect('suppliers');
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
        $supplier = Supplier::where('slug', $slug)->first();
        return view('suppliers.edit' , compact('supplier'));
    }

    public function update(Request $request)
    {
        $slug = $request->input('slug');
        $supplier = Supplier::where('slug',$slug)->first();
        $supplier->fill($request->input())->save();

        return redirect('suppliers');
    }

    public function destroy($id)
    {
        //
    }
}
