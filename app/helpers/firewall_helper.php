<?php

function getChainOption() {
    $opt_chain = array(
        'Choose Action',
        'input' => 'input',
        'output' => 'output',
        'forward' => 'forward',
    );
    return $opt_chain;
}

function getActionOption() {
    $opt_action = array(
        'Choose Action',
        'accept' => 'accept',
        'add-dst-to-address-list' => 'add-dst-to-address-list',
        'add-src-to-address-list' => 'add-src-to-address-list',
        'jump' => 'jump',
        'passthrough' => 'passthrough',
        'return' => 'return',
        'log' => 'log',
        'reject' => 'reject',
        'tarpit' => 'tarpit',
    );
    return $opt_action;
}

function getProtocolOption() {
    $opt_protocol = array(
        'Choose Action',
        'ipsec-ah' => 'ipsec-ah',
        'ipsec-esp' => 'ipsec-esp',
        'ipv6' => 'ipv6',
        'ddp' => 'ddp',
        'ipv6-opts' => 'ipv6-opts',
        'etherip' => 'etherip',
        'egp' => 'egp',
        'ipv6-frag' => 'ipv6-frag',
        'ggp' => 'ggp',
        'gre' => 'gre',
        'hmp' => 'hmp',
        'idpr-cmtp' => 'idpr-cmtp',
        'icmp' => 'icmp',
        'icmpv6' => 'icmpv6',
        'igmp' => 'igmp',
        'ipencap' => 'ipencap',
        'ipip' => 'ipip',
        'encap' => 'encap',
        'iso-tp4' => 'iso-tp4',
        'l2tp' => 'l2tp',
        'ipv6-nonxt' => 'ipv6-nonxt',
        'ospf' => 'ospf',
        'pup' => 'pup',
        'pim' => 'pim',
        'rspf' => 'rspf',
        'rdp' => 'rdp',
        'rsvp' => 'rsvp',
        'ipv6-route' => 'ipv6-route',
        'st' => 'st',
        'tcp' => 'tcp',
        'udp' => 'udp',
        'vmtp' => 'vmtp',
        'vrrp' => 'vrrp',
        'xns-idp' => 'xns-idp',
        'xtp' => 'xtp',
    );

    return $opt_protocol;
}

function getAddresslistOption() {
    $opt_address_list = array(
        'Choose Action',
        'port scanners' => 'port scanners',
        'NMAP STEALTH' => 'NMAP STEALTH',
        'SYN FIN' => 'SYN FIN',
        'ALL SCAN' => 'ALL SCAN',
        'SYN RST' => 'SYN RST',
    );
    return $opt_address_list;
}

function getTcpflagsOption() {
    $opt_tcp_flags = array(
        'Choose Action',
        'ack' => 'ack',
        'cwr' => 'cwr',
        'ece' => 'ece',
        'fin' => 'fin',
        'psh' => 'psh',
        'rst' => 'rst',
        'syn' => 'syn',
        'urg' => 'urg',
    );
    return $opt_tcp_flags;
}