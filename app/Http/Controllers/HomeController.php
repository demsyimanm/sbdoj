<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Input;
use App\Models\User;

class HomeController extends Controller
{
	protected $data = array();
    /*public function index()
    {	
        $this->data['username'] = "";
        $this->data['password'] = "";
        if(Auth::check())
        {
            $this->data['username'] = Auth::user()->username;
            $this->data['password'] = Auth::user()->password;
        }
        return view('pages.home',$this->data);
    }*/

    public function login()
    {
    	if (Request::isMethod('post'))
    	{
    		$credentials = Input::only('username','password');
            $this->data['username'] = Input::get('username');
            if (Auth::attempt($credentials,true))
            {
                return view('pages.home',$this->data);
            }

            return view('pages.login');
    	}

    	else if (Request::isMethod('get'))
    	{
            if (Auth::check())
            {
                return view('pages.home');
            }

    		return view('pages.login');
    	}
    }

    public function logout()
    {
        Auth::logout();
        return redirect('pages.login');
    }

    public function index()
    {
        return view ('pages.index');
    }
}
