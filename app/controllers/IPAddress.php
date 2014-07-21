<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;
use MikrotikAPI\Commands\IP\Hotspot\HotspotActive;
use MikrotikAPI\Util\DebugDumper;
use View,
    Input,
    Redirect,
    Request;

class IPAddress extends AdminController {

    public function getAll() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $ip = new Address($talker);

        $data = [


            'ipaddr' => $ip->getAll(),
        ];
        return View::make('vaddress/index', $data);
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

            return View::make('vaddress/vadd', $data);
        } else if (Request::isMethod('post')) {
            $param = Input::all();
            $talker = new Talker($connect);
            $addr = new Address($talker);
            $addr->add($param);
            return Redirect::to('ipaddr/ipaddr');
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

            $ip = new Address($talker);
            $data = [
                'ipaddr' => $ip->detail_address($id)
            ];
            return View::make('vaddress/update', $data);
            
        } else if (Request::isMethod('post')) {
            $param = Input::all();
            $talker = new Talker($connect);
            $addr = new Address($talker);
            $addr->set($param, $id);
            return Redirect::to('ipaddr/ipaddr');
        }
    }

    public function delete($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new Address($talker);
        $addr->delete($id);
        return redirect::to('ipaddr/ipaddr');
    }

    public function disable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");


        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new Address($talker);
        $addr->disable($id);
        return redirect::to('ipaddr/ipaddr');
    }

    public function enable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new Address($talker);
        $addr->enable($id);
        return redirect::to('ipaddr/ipaddr');
    }

    public function detail_Address($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new Address($talker);
        $data = [
            'ipaddr' => $addr->detail_address($id),
        ];
        return View::make('vaddress/detail', $data);
    }

}
?>

