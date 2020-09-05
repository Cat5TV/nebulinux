# next-odroid
NextCloud for ODROID-XU4-based systems.

Technically this could be done on any SBC that has my Baldnerd Debian base image runnning. Just that my intended use is for an ODROID CloudShell-2 based system, to create your own NextCloud server using this sleek little box.

It's not end-user ready or distributable. Just my own scripts to get up and going quickly.

In my case, I deploy my Baldnerd Debian base image from baldnerd.com, update it with apt, and then clone and run this script. Then I add the fan script to my crontab @reboot. Haven't bothered to get the screen working just yet.

From there, I take the two drives in my CloudShell-2, set up as a mirror, and wipe 'em. Then, mount that mirror to /var/www/html/data with fstab.

THEN (and only then), activate NextCloud by following the usual in-browser config, leaving the data dir as default.

Resources:

CloudShell 2 Data Recovery Guide:
https://wiki.odroid.com/accessory/add-on_boards/xu4_cloudshell2/data_recovery
