# sep/30/2013 17:28:04 by RouterOS 5.9
# software id = UCDF-KSD5
#
/system script
add name=Antispoof1 policy=\
    ftp,reboot,read,write,policy,test,winbox,password,sniff,sensitive source="\
    :local hosts [/ip dhcp-server lease find]\r\
    \n:local pcname \"X\"\r\
    \n:local pcnum 0\r\
    \n:global hacklist \"\"\r\
    \n:foreach h in \$hosts do={\r\
    \n:local host [/ip dhcp-server lease get \$h host-name]\r\
    \n:if ([:len \$host] >0) do {\r\
    \n:set pcname (\$pcname . \",\" . \$host)\r\
    \n:set pcnum (\$pcnum + 1)\r\
    \n}\r\
    \n}\r\
    \n:foreach h in \$pcname do={\r\
    \n:local hh 0\r\
    \n:if (!([:find \$hacklist \$h]>=0)) do={\r\
    \n:foreach k in \$pcname do={ :if (\$k=\$h) do={:set hh (\$hh + 1) } }\r\
    \n:if (\$hh>2) do={\r\
    \n:if ([:len \$hacklist] >0) do {:set hacklist (\$hacklist . \",\" . \$h)}\
    else={:set hacklist \$h}\r\
    \n}\r\
    \n}\r\
    \n}\r\
    \n:local timer [:pick [/system clock get time] 3 5]\r\
    \n:if ((\$switch > 0) || (\$timer >= \"58\")) do={\r\
    \n:log warning (\"New Hacklist: \" . \$hacklist)\r\
    \n}"
add name=Antispoof2 policy=\
    ftp,reboot,read,write,policy,test,winbox,password,sniff,sensitive source="\
    # use global hacklist variable\r\
    \n#:log info (\$hacklist)\r\
    \n:foreach host in \$hacklist do={\r\
    \n:foreach i in= [/ip dhcp-server lease find host-name \$host] do={\r\
    \n:local ipnum [/ip dhcp-server lease get \$i address]\r\
    \n:local unum [/ip hotspot active find address \$ipnum]\r\
    \n:if ([:len \$unum] >0) do {\r\
    \n:local usr [/ip hotspot active get \$unum user]\r\
    \n:log warning (\$host . \" \" . \$ipnum . \" \" . \$usr)\r\
    \n#next line kick them out right now, could also check pppoe\r\
    \n/ip hotspot active remove \$unum\r\
    \n#other stuff can do now with the identified IP and USER\r\
    \n}\r\
    \n}\r\
    \n}"
