# envswitch.php
 [Code once run everywhere] 
 

**envswitch.php** is a fast & flexible environment switching library for PHP 5.3+

*  Define multiple production or development servers 
*  Callback compatibility
*  Server limits => [2500+ requests/second] 

## Getting started

1. PHP 5.x.x is required
2. Install envswitch using [Composer](#composer-installation) (recommended)
3. (Optional) Throw in some [APC](http://pecl.php.net/package/APC) for good measure

## Composer Installation

1. Get [Composer](http://getcomposer.org/)
2. Require Klein with `php composer.phar require kimtooflex/envswitch`
3. Add the following to your application's main PHP file: `require 'vendor/autoload.php';`

## Example

*Hello World* - Obligatory hello world example (one server)

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

EnvSwitch::setEnv("127.0.0.2",
          function() {
              die("Hello world, this is development environment");
          },
          function() {
               die("Hello world, this is production environment");
          }
);
```

*Example 1* - Respond to many servers

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

EnvSwitch::setEnv("127.0.0.2,localhost",
          function() {
              die("Hello world, this is development environment");
          },
          function() {
               die("Hello world, this is production environment");
          }
);
```
