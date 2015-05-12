 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AuthController@index');

Route::get('home', 'HomeController@index');

Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@authenticate');
Route::get('logout', 'AuthController@logout');


Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::post('users/create', 'UsersController@add');
Route::get('users/{user}/edit', 'UsersController@edit');
Route::patch('users/{user}/edit', 'UsersController@update');

Route::bind('user', function($id){
    return App\User::where('id',$id)->first();
});

Route::get('products', 'ProductsController@index' , ['middleware' => 'auth']);
Route::get('products/create', 'ProductsController@create');
Route::post('products/create', 'ProductsController@add');
Route::get('products/{product}/edit', 'ProductsController@edit');
Route::patch('products/{product}/edit', 'ProductsController@update');

Route::bind('product', function($slug){
 return App\Product::where('slug',$slug)->first();
});

Route::get('categories', 'CategoriesController@index');
Route::get('categories/create', 'CategoriesController@create');
Route::post('categories/create', 'CategoriesController@add');
Route::get('categories/{slug}/edit', 'CategoriesController@edit');
Route::patch('categories/{slug}/edit', 'CategoriesController@update');


Route::get('brands', 'BrandsController@index');
Route::get('brands/create', 'BrandsController@create');
Route::post('brands/create', 'BrandsController@add');
Route::get('brands/{slug}/edit', 'BrandsController@edit');
Route::patch('brands/{slug}/edit', 'BrandsController@update');


Route::get('suppliers', 'SuppliersController@index');
Route::get('suppliers/create', 'SuppliersController@create');
Route::post('suppliers/create', 'SuppliersController@add');
Route::get('suppliers/{slug}/edit', 'SuppliersController@edit');
Route::patch('suppliers/{slug}/edit', 'SuppliersController@update');


Route::get('stocks', 'StocksController@index');
Route::get('stocks/create', 'StocksController@create');
Route::post('stocks/create', 'StocksController@add');
Route::get('stocks/{slug}/edit', 'StocksController@edit');
Route::patch('stocks/{slug}/edit', 'StocksController@update');

//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::get('upload', 'UploadsController@index');
Route::get('upload/get/{filename}', ['as' => 'getentry', 'uses' => 'UploadsController@get']);
Route::post('upload/add',['as' => 'addentry', 'uses' => 'UploadsController@add']);