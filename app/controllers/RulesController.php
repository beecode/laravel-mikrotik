<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Rules;
use View;
use Validator;
use Redirect;
use Session;
use Input;

class RulesController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // retrieve dari database
        $rules = Rules::all();

        // load view template rules.blade.index dan mengisi variable rules
        return View::make('fitur.rules.index')->with('rules', $rules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add() {
        // load template dan buat form dari create.blade.php
        return View::make('fitur.rules.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //$itu = Input::all();
//
//        print_r($itu);
//         validasi paramater
        $rules = array(
            'chain' => 'required',
            'action' => 'required',
            'protocol' => 'required',
            'addresslist' => 'required',
            'addresslisttimeout' => 'required',
            'disable' => 'required',
            'comment' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        //jika tidak valid redirect kembali ke halaman create
        if ($validator->fails()) {
            return Redirect::to('/rules/add')->withErrors($validator);
        } else {
            
   //jika valid simpan ke database
            $rules = new Rules;
            $rules->chain = Input::get('chain');
            $rules->action = Input::get('action');
            $rules->protocol = Input::get('protocol');
            $rules->addresslist = Input::get('addresslist');
            $rules->addresslisttimeout = Input::get('addresslisttimeout');
            $rules->disable = Input::get('disable');
            $rules->comment = Input::get('comment');
            $rules->save();

            // redirect ke index rules
            Session::flash('message', 'Successfully add mikrotik!');
            return Redirect::to('/rules');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function detail($id) {
        // retrieve single rules
        $rules = Rules::find($id);

        // menampilkan view template show.blade.php dan mengisi variable rules
        return View::make('fitur.rules.detail')->with('rules', $rules);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $rules = Rules::find($id);

        // menampilkan view template edit.blade.php dan mengisi variable rules
        return View::make('fitur.rules.edit')->with('rules', $rules);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        // validation
        $ruless = array(
            'chain' => 'required',
            'action' => 'required',
            'protocol' => 'required',
            'addresslist' => 'required',
            'addresslisttimeout' => 'required',
            'disable' => 'required',
            'comment' => 'required',
        );
        $validator = Validator::make(Input::all(), $ruless);

        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to('rules/edit')
                            ->withErrors($validator);
        } else {
            // jika valid disimpan
            $rules = Rules::find($id);
            $rules->chain = Input::get('chain');
            $rules->action = Input::get('action');
            $rules->protocol = Input::get('protocol');
            $rules->addresslist = Input::get('addresslist');
            $rules->addresslisttimeout = Input::get('addresslisttimeout');
            $rules->disable = Input::get('disable');
            $rules->comment = Input::get('comment');
            $rules->save();

            // redirect ke halaman rules index
            Session::flash('message', 'Successfully updated Rules!');
            return Redirect::to('rules');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id) {
        // delete
        $rules = Rules::find($id);
        $rules->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the rules!');
        return Redirect::to('rules');
    }

}
