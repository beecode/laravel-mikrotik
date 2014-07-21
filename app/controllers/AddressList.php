<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallAddressList;
use MikrotikAPI\Util\DebugDumper;

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
        $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $param = [
            'address' => '192.168.1.2',
            'comment' =>'berhasil',
            'list'=>'mikro'
        ];
        DebugDumper::dump($id->add($param));
    }

    public function delete(){
      $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start=$id->delete('*AF');
        DebugDumper::dump($start);
    }
    public function disable(){
      $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start=$id->disable('*AD');
        DebugDumper::dump($start);
    }
    public function enable(){
      $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start=$id->enable('*AD');
        DebugDumper::dump($start);
    }
    public function detail(){
      $connect = new Auth();
        $connect->setHost("172.18.1.254");
        $connect->setUsername("admin");
        $connect->setPassword("1261");
        $connect->setDebug(true);

        $talker = new Talker($connect);

        $id = new FirewallAddressList($talker);
        $start=$id->detail('*AD');
        DebugDumper::dump($start);
    }
    public function set(){
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

