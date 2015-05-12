<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

	public function index()
	{
        return redirect('login');
	}

    public function login()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'active' => 0
        ]))
        {
            Session::put('logged', true);
            Session::put('email', $request->input('email'));
            return redirect('products');
            echo 'pasok';
        } else {
            // if any error send back with message.
            Session::flash('message', 'Wrong login details');
            Session::flash('alert-class', 'alert-danger');
            return redirect('login');
            echo 'indi';
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}
