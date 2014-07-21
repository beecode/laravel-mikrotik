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

class ActiveController extends AdminController {

    public function getAll() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $ip = new HotspotActive($talker);

        $data = [


            'ipaddr' => $ip->getAll(),
        ];
        return View::make('fitur/h_aktive/index', $data);
    }

    public function delete($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new HotspotActive($talker);
        $start = $id->delete($id);
        DebugDumper::dump($start);
    }

    public function detail($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new HotspotActive($talker);
        $data = [
            'ipaddr' => $addr->detail_address($id),
        ];
        return View::make('fitur/h_aktive/detail', $data);
    }

}

?>
