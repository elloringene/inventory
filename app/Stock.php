<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Category;
use App\Brand;
use App\Product;
use App\Supplier;

class Stock extends Eloquent {

	protected $fillable = [
        'product_id' , 'quantity' , 'warn_qty' , 'buy_price' , 'supplier_id'
    ];

    public static function getStocks(){
        $stocks = Stock::Join('products', function($join){

            $join->on(
                'products.id',
                '=' ,
                'stocks.product_id'
            );

        })->join('brands', function($join){

            $join->on(
                'brands.id',
                '=' ,
                'products.brand'
            );

        })->join('categories', function($join){

            $join->on(
                'categories.id',
                '=' ,
                'products.categories'
            );

        })->select(
            'products.*',
            'brands.name as brand',
            'categories.name as categories',
            'stocks.quantity as quantity',
            'stocks.warn_qty as warn_qty',
            'stocks.buy_price as buy_price'
        )->get();

        return $stocks;
    }
}
