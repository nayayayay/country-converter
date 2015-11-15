## Country Converter

A PHP package to convert a country ISO to country name and vice-versa.

## Installation

To install this package, make sure you have [composer](https://getcomposer.org/).
Then, require it:
```
composer require chibifr/country-converter
```

## Usage

You can now use it really easily! After you required the package with composer, start using it:
```php
<?php
// Require the composer's vendor autoload file
require './vendor/autoload.php';

use ChibiFR\CountryConverter\Converter;

// Create a new Converter object
$converter = new Converter();

// Get a country name from its ISO code
echo $converter->getCountryName('jp'); // will echo "Japan"

// Get a country ISO code from its name
echo $converter->getCountryCode('France'); // will echo "FR"
```
