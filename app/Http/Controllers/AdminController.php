<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Input;
use App\Models\AdminModel;

class AdminController extends Controller
{
	protected $data = array();
    public function index()
    {	
        $this->data['username'] = "";
        $this->data['password'] = "";
        if(Auth::check())
        {
            $this->data['username'] = Auth::admins()->username;
            $this->data['password'] = Auth::admins()->password;
        }
        return view('AdminPages.index',$this->data);
    }

    public function login()
    {
    	if (Request::isMethod('post'))
    	{
    		$credentials = Input::only('username','password');
            $this->data['username'] = Input::get('username');
            if (Auth::attempt($credentials,true))
            {
                //return view('AdminPages.index',$this->data);

                dd('asdadsd');
            }

            //return view('AdminPages.login');
            dd('asdadsd_agagl');
    	}

    	else if (Request::isMethod('get'))
    	{
            if (Auth::check())
            {
                return view('AdminPages.index');
            }

    		return view('AdminPages.login');
    	}
    }

    public function logout()
    {
        Auth::logout();
        return redirect('AdminPages.login');
    }

    /*public function index()
    {
        return view ('pages.index');
    }*/
}
