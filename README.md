# envswitch.php
 Code once, host anywhere, run everywhere 
 

**envswitch.php** is a fast & flexible environment switching library for PHP 5.X+

*  Define multiple production or development servers 
*  Callback compatibility
*  No Server limits 

## Getting started

1. PHP 5.x.x is required
2. Install envswitch using [Composer](#composer-installation) (recommended)
 
## Composer Installation

1. Get [Composer](http://getcomposer.org/)
2. Require Klein with `php composer.phar require kimtooflex/envswitch`
3. Add the following to your application's main PHP file: `use \envswitch\EnvSwitch;`

## Example

*Hello World* - Obligatory hello world example (one server)

```php
<?php
 use \envswitch\EnvSwitch;
 
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
use \envswitch\EnvSwitch;

EnvSwitch::setEnv("127.0.0.2,localhost",
          function() {
              die("Hello world, this is development environment");
          },
          function() {
               die("Hello world, this is production environment");
          }
);
```
