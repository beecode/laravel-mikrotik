<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;
use MikrotikAPI\Commands\IP\Firewall\FirewallAddressList;
use MikrotikAPI\Util\DebugDumper;

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function index() {
        return View::make('index');
    }

    public function showWelcome() {

        return View::make('hello');
    }

    public function nescafe() {
        return View::make('covi');
    }

    public function mangan() {
        return View::make('kangkung');
    }

    public function getAll() {


        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        DebugDumper::dump($id->getAll());
    }
    
    public function ipaddress() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);
        
        $talker = new Talker($connect);

        $id = new Address($talker);
        DebugDumper::dump($id->getAll());
    }

}

?>