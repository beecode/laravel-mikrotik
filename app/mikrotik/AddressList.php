<?php

namespace App\Mikrotik;

use MikrotikAPI\Commands\IP\Firewall\FirewallAddressList;
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Entity\Auth;

/**
 * Description of AddressList
 *
 * @author nunenuh
 */
class AddressList {

    public function add($mikrotik, $param) {
        foreach ($mikrotik as $val) {
            $auth = new Auth();
            $auth->setHost($val->ipaddr);
            $auth->setUsername($val->username);
            $auth->setUsername($val->password);
            $auth->setPort($val->port);
            
            $talker = new Talker($auth);
            $fal = new FirewallAddressList($talker);
            $fal->add($param);
        }
    }

}
