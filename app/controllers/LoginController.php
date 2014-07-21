<?php

namespace App\Controllers;


use Input;
use Validator;
use Auth;
use Redirect;
use Session;
use App\Models\Users;
use Illuminate\Support\Facades\Crypt;
use View;

class LoginController extends BaseController {

    /**
     * 
     * @return View
     */
    public function index() {
        return View::make('login.index');
//        $data = 'admin';
//        echo Crypt::encrypt($data);
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesLogin() {
        $inp = Input::all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $valid = Validator::make($inp, $rules);
        if ($valid->fails()) {
            return Redirect::to('/login')->withErrors($valid);
        } else {
            $pass = $inp['password'];
            $email = $inp['email'];
            $data = [
                'email' => $email,
                'password' => $pass,
            ];
            if (Auth::attempt($data)) {
                Session::flash('message', 'Successfully Login!');
                return Redirect::intended('/ipaddr');
            } else {
                Session::flash('message', 'Wrong Username and or Password!!!');
                return Redirect::to('/login');
            }
        }
    }

    /**
     * 
     * @return Redirect
     */
    public function doLogout() {
        Auth::Logout();
        return Redirect::to('login');
    }

}
