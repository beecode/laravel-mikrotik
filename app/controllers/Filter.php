<?php

namespace App\Controllers;

use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;
use MikrotikAPI\Commands\IP\Hotspot\HotspotUsers;
use MikrotikAPI\Util\DebugDumper;
use View,
    Input,
    Redirect,
    Request;

class Filter extends BaseController {

    public function getAll() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $ip = new FirewallFilter($talker);

        $data = [


            'ipaddr' => $ip->getAll(),
        ];
        return View::make('fitur/f_filter/index', $data);
    }

    public function add() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        if (Request::isMethod('get')) {
            $talker = new Talker($connect);

            $ip = new Address($talker);
            $data = [
                'ipaddr' => $ip->getAll()
            ];

            return View::make('fitur/f_filter/addfilter', $data);
        } else if (Request::isMethod('post')) {
            $param = Input::all();
            $talker = new Talker($connect);
            $addr = new FirewallFilter($talker);
            $addr->add($param);
            return Redirect::to('ipaddr/filter');
        }
    }

    public function set($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        if (Request::isMethod('get')) {
            $talker = new Talker($connect);

            $ip = new FirewallFilter($talker);
            $data = [
                'ipaddr' => $ip->detail($id)
            ];
            return View::make('fitur/f_filter/setfilter', $data);
        } else if (Request::isMethod('post')) {
            $param = Input::all();
            $talker = new Talker($connect);
            $addr = new FirewallFilter($talker);
            $addr->set($param, $id);
            return Redirect::to('ipaddr/filter');
        }
    }

    public function delete($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new FirewallFilter($talker);
        $addr->delete($id);
        return redirect::to('ipaddr/filter');
    }


     public function disable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");


        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new FirewallFilter($talker);
        $addr->disable($id);
        return redirect::to('ipaddr/filter');
    }

    public function enable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new FirewallFilter($talker);
        $addr->enable($id);
        return redirect::to('ipaddr/filter');
    }
    public function detail($id) {
       $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new FirewallFilter($talker);
        $data = [
            'ipaddr' => $addr->detail($id),
        ];
        return View::make('fitur/f_filter/detail', $data);
    }

}
?>

