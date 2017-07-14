# BCB Library

A PHP class library to retrieve data from BCB ( Banco do Brasil ) Webservice.
For now is just has a simple structure to consult the taxes rates available on the webservice.

Unfortunately I had to use static data because the webservice doesn't provide any method to retrieve the available data.

This is pretty much my first Open Source project, so any suggestions on code or code structure or anythig else you can talk to me on my twitter account @orenorram.
#Dependencies

Just the composer. http://getcomposer.com

# Usage

There is a simple usage example on `web/index.php`

So you can just clone the project

```git clone git@github.com:renorram/BCBLib.git```

Install dependencies

```
cd BCBLib
composer install
```

And use the php Built-in web server

```
php -S localhost:3000 -t web
```