<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Controllers\BaseController;
use App\Models\Users;
use View;
use Input;
use Hash;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Paginator;

/**
 * Description of TestController
 *
 * @author aljufry
 * 
 * class userController
 */
class UserController extends AdminController {

    /**
     * 
     * @return View
     */
    public function index() {
        return View::make('fitur.users.index');
    }

    /**
     * 
     * @return View
     */
    public function userAdd() {
        return View::make('fitur.users.add');
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $rules = [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/users/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            $pass = $in['password'];
            $pass = Crypt::encrypt($pass);
            $user = new Users;
            $user->username = $in['username'];
            $user->password = $pass;
            $user->email = $in['email'];
            $user->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('/users');
        }
    }

    /**
     * 
     * @param type $id
     * @return View
     */
    public function userEdit($id) {
        $user = Users::find($id);
        $data = [
            'isi' => $user,
        ];
        return View::make('fitur.users.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function prosesUpdate($id) {
        // validation
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);
        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to("/users/edit/" . $id)
                            ->withErrors($validator);
        } else {
            // jika valid disimpan
            $in = Input::all();
            $pass = $in['password'];
            $pass = Crypt::encrypt($pass);
            $user = Users::find($id);
            $user->username = $in['username'];
            $user->password = $pass;
            $user->email = $in['email'];
            $user->save();
            // redirect ke halaman band index
            Session::flash('message', 'Successfully updated Users!');
            return Redirect::to('/users');
        }
    }

    /**
     * 
     * @return View
     */
    public function userView() {
        $user_pag = Users::paginate(2);
        $data = [
            'users' => $user_pag,
        ];

        return View::make('fitur.users.index', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function userDelete($id) {
        $user = Users::find($id);
        $user->delete();
        Session::flash('message', 'Successfully deleted the Users!');
        return Redirect::to('/users');
    }

}
