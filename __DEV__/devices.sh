#!/bin/bash
# Uncomment for debugging
#set -x



isp=$(/sbin/ip route | awk '/default/ { print $3 }')

isp=${isp:0:10}

pingf(){
    if ping -w 2 -q -c 1 $isp"$1" > /dev/null;
    then 
       printf "%s \n" 192.168.2."$1"

    fi
}

main(){

    NUM=1
    while [ $NUM -lt 255  ];do 
        pingf "$NUM" &
        NUM=$(expr "$NUM" + 1)
    done | sort -nu # for sort ip devices
    wait
}

main


