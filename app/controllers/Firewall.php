<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;
use MikrotikAPI\Commands\IP\Firewall\FirewallAddressList;
use MikrotikAPI\Commands\IP\Hotspot\HotspotUsers;
use MikrotikAPI\Util\DebugDumper;
use View,
    Input,
    Redirect,
    Request;

class Firewall extends AdminController {

    public function getAll() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $ip = new FirewallAddressList($talker);

        $data = [

            'ipaddr' => $ip->getAll(),
        ];
        return View::make('fitur/f_addresslist/index', $data);
    }

    public function delete($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new FirewallAddressList($talker);
        $addr->delete($id);
        return redirect::to('ipaddr');
    }
    
    public function disable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");


        $connect->setDebug(true);

        $talker = new Talker($connect);
        $addr = new FirewallAddressList($talker);
        $addr->disable($id);
        return redirect::to('ipaddr');
    }

    public function enable($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new FirewallAddressList($talker);
        $addr->enable($id);
        return redirect::to('ipaddr');
    }
    

    public function detail($id) {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $addr = new FirewallAddressList($talker);
        $data = [
            'ipaddr' => $addr->detail($id),
        ];
        return View::make('fitur/f_addresslist/detail', $data);
    }

}
?>

