<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stock;

class StocksController extends Controller {

    public function index()
    {
        $stocks = Stock::getStocks();
        return view('stocks.index' , compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function add(Request $request)
    {
        $stock = $request->input();
        Stock::create($stock);
        return redirect('stocks');
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
        $stock = Stock::where('id', $id)->first();
        return view('stocks.edit' , compact('stock'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $stock = Stock::where('id',$id)->first();
        $stock->fill($request->input())->save();

        return redirect('stocks');
    }

    public function destroy($id)
    {
        //
    }


}
