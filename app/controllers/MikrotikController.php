<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mikrotikController
 *
 * @author salam
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mikrotik;
use View;
use rules;
use Validator;
use Redirect;
use Session;
use Input;

class MikrotikController extends BaseController {

    public function index() {
        // retrieve dari database
        $mikrotik = Mikrotik::all();

        // load view template bands.blade.index dan mengisi variable bands
        return View::make('fitur.mikrotik.index')->with('mikrotik', $mikrotik);
    }

    public function add() {
        // load template dan buat form dari create.blade.php
        return View::make('fitur.mikrotik.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
//        $itu = Input::all();
//
//        print_r($itu);
//         validasi paramater
        $mikrotik = array(
            'connect' => 'required',
            'username' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make(Input::all(), $mikrotik);
        //jika tidak valid redirect kembali ke halaman create
        if ($validator->fails()) {
            return Redirect::to('/mikrotik/add')->withErrors($validator);
        } else {
            // jika valid simpan ke database
            $mikrotik = new Mikrotik;
            $mikrotik->connect = Input::get('connect');
            $mikrotik->username = Input::get('username');
            $mikrotik->password = Input::get('password');
            $mikrotik->save();

            // redirect ke index bands
            Session::flash('message', 'Successfully add mikrotik!');
            return Redirect::to('mikrotik');
        }
    }

    public function delete($id) {
        // delete
        $mikrotik = Mikrotik::find($id);
        $mikrotik->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the band!');
        return Redirect::to('mikrotik');
    }

    public function detail($id) {
        // retrieve single band
        $rules = Mikrotik::find($id);

        // menampilkan view template show.blade.php dan mengisi variable band
        return View::make('fitur.mikrotik.detail')->with('mikrotik', $rules);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
}

?>
