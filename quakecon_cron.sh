#!/bin/bash

MSG="/bin/grep 'Coming Soon!'"
MAIL_LIST=(
    "email1@site.com"
    "email2@site.com"
    "email3@site.com"
)

if [ "/usr/bin/php /qcc/quakecon_reg_check.php | $MSG" == "" ]
	then
		echo 'Registration is ready, go go go! Remember to use team name c0vf3f3! Register here: http://www.quakecon.org/registration-2/' | mailx -s 'QuakeCon Registration 2k18 is READY!' $MAIL_LIST
	else
		echo "Were still waiting, coming soon..."
fi
