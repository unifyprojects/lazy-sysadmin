## lazy-sysadmin
A tool for lazy sysadmins.


#### Requirements :
- [PHP](https://secure.php.net) 7.1 or higher
- [Composer](https://getcomposer.org)

#### Installation :
```console
$ composer global require unifyprojects/lazy-sysadmin
```
#### Usage :

```console
$ cd /path/to/sh/scripts
$ lazy-sysadmin
```

#### Compile from source :

##### Requirements :
- [Box](https://github.com/humbug/box)

```console
$ git clone https://github.com/unifyprojects/lazy-sysadmin.git
$ cd lazy-sysadmin
$ composer install
$ box compile
$ sudo mv lazy-sysadmin /binary/path
```
