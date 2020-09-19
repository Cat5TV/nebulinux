# Nebulinux
Nebulinux attempts to bring NextCloud to ODROID-XU4-based systems in a distributable way.

Technically this could be done on any SBC that has my Baldnerd Debian base image runnning. Just that my intended use is for an ODROID CloudShell-2 based system, to create your own NextCloud server using this sleek little box.

It's not end-user ready or distributable. Just my own scripts to get up and going quickly.

In my case, I deploy my Baldnerd Debian base image from baldnerd.com, update it with apt, and then clone and run this script.

From there, I take the two drives in my CloudShell-2, set up as a mirror, and wipe 'em. Then, mount that mirror to /mnt/data with fstab.

Once mounted, give access: chown www-data:www-data /mnt/data

THEN (and only then), activate NextCloud by following the usual in-browser config, setting the data target to /mnt/data

Resources:

Nebulinux Web Site: https://nebulinux.com

CloudShell 2 Data Recovery Guide:
https://wiki.odroid.com/accessory/add-on_boards/xu4_cloudshell2/data_recovery
