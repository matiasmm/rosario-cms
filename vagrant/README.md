Vagrant development setup.

You must have a vagrant box named "debian-wheezy-64", so checkit with command

	vagrant box list

if you don't have one you can get the on first downloading one from https://www.dropbox.com/s/q4r5s1qg2dovxi8/debian-wheezy-64.box
then run the command

	vagrant box import debian-wheezy-64.box debian-wheezy-64

to initialize the enviroment run

	vagrant up

after is finished you suld go to http://127.0.0.1:8080/app_dev.php and see the development enviroment.

TODO:
 * Load the shared files with nfs (virtualbox shared folder sopously buggy)
 * Use a the default kernerl (other reason to use nfs).
 * Setup the database (mysql and sf2) with a default dev user.
