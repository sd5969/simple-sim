#!/bin/bash

if [ $(find ../ -mtime -1 -type f -name "emails.txt" 2>/dev/null) ]
then
        echo "Looks like someone new signed up for the mailing list." | mail -s "Looks like someone new signed up for the mailing list." admin@trywanderr.com -A "../emails.txt"
fi
