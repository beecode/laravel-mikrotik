<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallAddressList;
use MikrotikAPI\Util\DebugDumper;
use App\Mikrotik\AddressList;
use App\Models\Mikrotik;

class AddressList extends AdminController {

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

    public function add() {
        $param = Input::all();
        $mikrotik = Mikrotik::where();
        $al = new AddressList();
        $al->add($mikrotik, $param);
    }

    public function delete() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start = $id->delete('*AF');
        DebugDumper::dump($start);
    }

    public function disable() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start = $id->disable('*AD');
        DebugDumper::dump($start);
    }

    public function enable() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start = $id->enable('*AD');
        DebugDumper::dump($start);
    }

    public function detail() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start = $id->detail('*AD');
        DebugDumper::dump($start);
    }

    public function set() {
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        DebugDumper::dump($id->set($param, $id));
    }

}
?>

