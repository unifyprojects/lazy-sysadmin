## lazy-sysadmin
A tool for lazy sysadmins.


#### Requirements :
- [PHP](https://secure.php.net) 7.1 or higher

#### Installation :

##### Locally :
Download [lazy-sysadmin](https://github.com/unifyprojects/lazy-sysadmin/releases/download/0.2.5/lazy-sysadmin
) and store it somewhere in your computer
##### Globally (manual)

You can run these commands to easily access lazy-sysadmin from anywhere on your system:
```console
$ wget https://github.com/unifyprojects/lazy-sysadmin/releases/download/0.2.5/lazy-sysadmin -O lazy-sysadmin
```
or with Curl
```console
$ curl -L https://github.com/unifyprojects/lazy-sysadmin/releases/download/0.2.5/lazy-sysadmin -o lazy-sysadmin
```
then:
```console
$ sudo chmod a+x lazy-sysadmin
$ sudo mv lazy-sysadmin /usr/local/bin/lazy-sysadmin
```
Then, just run `lazy-sysadmin`.

##### Globally (Composer)
To install LazySysAdmin, install [Composer](https://getcomposer.org) and issue the following command:
```console
$ composer global require unifyprojects/lazy-sysadmin
```
Then make sure you have the global Composer binaries directory in your PATH. This directory is platform-dependent, see Composer documentation for details. Example for some Unix systems:

```console
$ export PATH="$PATH:$HOME/.composer/vendor/bin"
```

#### Usage :

```console
$ cd /path/to/sh/scripts
$ lazy-sysadmin
```

#### Compile from source :

##### Requirements :
- [Composer](https://getcomposer.org)
- [Box](https://github.com/humbug/box) ( `composer global require humbug/box` )

```console
$ git clone https://github.com/unifyprojects/lazy-sysadmin.git
$ cd lazy-sysadmin
$ composer install
$ box compile
$ sudo mv lazy-sysadmin /binary/path
```
