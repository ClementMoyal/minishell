#!/bin/sh
supervisord
#rc-service telegraf --config /etc/telegraf/telegraf.conf
#while true 
#do
#	sleep 1
#	if [ $(ps | grep -v grep | grep nginx | wc -l) -eq 0 ] || [ $(ps | grep -v grep | grep sshd | wc -l) -eq 0 ]
#	then
#		exit
#	fi
#done
