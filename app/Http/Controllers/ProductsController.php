<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Str as Str;
use App\Product;
use App\Category;
use App\Brand;
use App\Stock;
use App\Supplier;
use App\Upload;

use Illuminate\Support\Facades\Session;

use App\Http\Requests\CreateProductRequest;
class ProductsController extends Controller {

	public function index()
	{
        $products = Product::Join('brands', function($join)
        {
            $join->on('brands.id', '=' , 'products.brand');

        })->join('categories', function($join){

            $join->on('categories.id', '=' , 'products.categories');

        })->select(
            'products.*',
            'brands.name as brand',
            'categories.name as categories'
        )->paginate(8);

        return view('products.index' , compact('products') );
	}

	public function create()
	{
        $categories = Category::where('for','Products')->lists('name','id');
        $brands = Brand::lists('name','id');
        return view('products.create' , compact('categories','brands'));
	}

	public function add(CreateProductRequest $request)
    {
        $file = Request::file('filefield');

        $photo = $this->uploadFile($file);

        $product = Request::all();
        $product['slug'] = Str::slug(Request::get('name'));
        $product['photo'] = $photo;
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
        $file = Request::file('filefield');

        $slug = Request::get('slug');
        $product = Product::where('slug',$slug)->first();

        $photo = $this->uploadFile($file);

        $product['photo'] = $photo;
        $product->fill(Request::all())->save();

        return redirect('products');
	}

	public function destroy($id)
	{
		//
	}

}
