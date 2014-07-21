<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author salam
 */
class AdminController extends BaseController {

    function __construct() {
        $this->beforeFilter('auth', array('except' => '/login'));
    }

}

?>
