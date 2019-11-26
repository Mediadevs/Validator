# Advanced validator
[![Total Downloads](https://poser.pugx.org/mediadevs/validator/downloads)](https://packagist.org/packages/mediadevs/validator)
[![Latest Unstable Version](https://poser.pugx.org/mediadevs/validator/v/unstable)](https://packagist.org/packages/mediadevs/validator)
[![Latest Stable Version](https://poser.pugx.org/mediadevs/validator/v/stable)](https://packagist.org/packages/mediadevs/validator)
[![Version](https://img.shields.io/packagist/v/mediadevs/validator.svg)](https://packagist.org/packages/mediadevs/validator)
[![Software License][ico-license]](LICENSE.md)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/mediadevs/validator/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Build Status](https://scrutinizer-ci.com/g/mediadevs/validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mediadevs/validator/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/mediadevs/validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mediadevs/validator/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mediadevs/validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mediadevs/validator/?branch=master)
[![Minimum PHP Version](https://img.shields.io/badge/php-_%5E7.1-8892BF.svg)](https://github.com/symfony/symfony)

## Be aware!
Not everything has been tested yet, use on own risk.

## Install

Via Composer

``` bash
$ composer require mediadevs/form-assist
```

Via GIT
``` bash
HTTPS:
git clone https://github.com/mediadevs/form-assist.git

SSH:
git clone git@github.com:mediadevs/form-assist.git
```

## Usage
```php
<?php 
Mediadevs\Validator\Validator::validate($clean, [
    'name'  => 'required|string|min_length:6',
    'email' => 'required|email|allowed_providers:hotmail.com,outlook.com,live.com,gmail.com,yourwebsite.tld',
], $language);
/** 
 * @var  $language - is optional and defaults to english 
 * @path './config/translations.php'
 */
``` 
### Validation filters
| filter | aliases | functionality | arguments | returns | 
|---:|---|:---:|---|:---|
| `required` | | Whether the field is set and is not empty.| `false` | `boolean` |
| `numeric` | `num` | Whether the value of the field is **numeric**. | `false` | `boolean` |
| `float` | | Whether the value of the field is a **float**. | `false` | `boolean` |
| `boolean` | `bool` | Whether the value of the field is a **boolean**. | `false` | `boolean` |
| `integer` | `int` | Whether the value of the field is an **integer**. | `false` | `boolean` |
| `null` | | Whether the value of the field is **null**. | `false` | `boolean` |
| `string` | | Whether the value of the field is a **string**. | `false` | `boolean` |
| `array` | | Whether the value of the field is an **array**. | `false` | `boolean` |
| `before_date` | | Whether the value of the field is before the threshold date. | `true` | `boolean` |
| `after_date` | | Whether the value of the field is after the threshold date. | `true` | `boolean` |
| `between_dates` | | Whether the value of the field between the two threshold dates. | `true` | `boolean` |
| `starts_with` | | Whether the value of the field starts with the threshold substring. | `true` | `boolean` |
| `ends_with` | | Whether the value of the field ends with the threshold substring. | `true` | `boolean` |
| `contains` | | Whether the value of the field contains the threshold substring. | `true` | `boolean` |
| `regular_expresion` | `expression` / `regex` | Whether the value of the field matches the regular expression threshold pattern.  | `true` | `boolean` |
| `exact_length` | `exact` | Whether the value of the field matches the exact threshold length. |  `true` | `boolean` |
| `minimum_length` | `min_length` / `minlen` | Whether the value of the field has the minimal required threshold length. |`true` | `boolean` |
| `maximum_length` | `max_length` / `maxlen` | Whether the value of the field has less then the maximal required threshold length. | `true` | `boolean` |
| `email` | | Whether the value of the field is an email. | `false` | `boolean` |
| `url` | | Whether the value of the field is an url.|  `false` | `boolean` |
| `domain` | | Whether the value of the field is a domain name.|  `false` | `boolean` |
| `ip_address` | `ip` | Whether the value of the field is an IP address. |  `false` | `boolean` |
| `ipv4_address` | `ipv4` | Whether the value of the field is an IPv4 address. |  `false` | `boolean` |
| `ipv6_address` | `ipv6` | Whether the value of the field is an IPv6 address. |  `false` | `boolean` |
| `mac_address` | `mac` | Whether the value of the field is an MAC address |  `false` | `boolean` |
| `between` | | Whether the value of the field between two values. | `true` | `boolean` |
| `minimum` | `min` | Whether the value of the field has the minimum worth of the threshold. | `true` | `boolean` |
| `maximum` | `max` | Whether the value of the field has less than the maximum worth of the threshold.| `true` | `boolean` |
| `equals_to` | `equals` / `equal_to` / `equal` | Whether the value of the field equals the worth of the threshold. | `true` | `boolean` |
| `not_equal` | `not_equal_to` | Whether the value of the field does not equal the worth of the threshold. | `true` | `boolean` |
| `greater_than` | `gt` | Whether the value of the field is greater than the threshold. | `true` | `boolean` |
| `greater_than_or_equal_to` | `gte` | Whether the value of the field is greater or equal to the threshold. | `true` | `boolean` |
| `less_than` | `lt` | Whether the value of the field is lesser than the threshold. | `true` | `boolean` |
| `less_than_or_equal_to` | `lte` | Whether the value of the field is lesser or equal to the threshold. | `true` | `boolean` |
| `allowed_extensions` | | Whether the file has an allowed extension. | `true` | `boolean` |
| `allowed_mime_types` | | Whether the file has an allowed mime-type. | `true` | `boolean` |
| `max_file_size` | `max_size` | Whether the file is lesser or equal to the maximal file size. | `true` | `boolean` |
| `allowed_email_providers` | `allowed_providers` | Whether the domain of the email address is from an allowed / whitelisted provider. | `true` | `boolean` |
| `blocked_email_providers` | `blocked_providers` | Whether the domain of the email address is from an blocked / blacklisted provider. | `true` | `boolean` |
| `credit_card` | `cc` | Whether the creditcard which the user has entered is a valid one. | `false` | `boolean` |
| `iban` | | Whether the iban which the user has entered is a valid one. | `false` | `boolean` |

## Create your own validation or sanitization filter
Creating a custom validation or sanitization filter is not difficult, it is in essence a fairly streamlined and simple 
process. This library is also structured to have each filter as a standalone class, all the classes will be registered in
its designated registry configuration file. Every filter can have an infinite amount of aliases (as long as the alias is unique).

### Register from outside the library
```php
<?php
Mediadevs\Validator\Helpers\Registry::getInstance();

// Registering one of the test classes
Mediadevs\Validator\Helpers\Registry::register([
    \Vendor\Package\Namespace\CustomFilters\YourCustomFilter::class,
]);
```

### Register from within the library
#### Step one
Create own validation or sanitization class.
* Navigate to `src/Filters/` and create a new folder named `/Custom`

#### Step two
* Create a new class (You can take the base class example from: `/examples/create_custom_filters/option_b/FilterExample.php`)

#### Step three
* Enter your custom validation logic, make sure it returns a `boolean`

#### Step four
* Add your filters as a new item inside the $providers array inside `/src/Services/FilterProvider.php`
```php
<?php

namespace Mediadevs\Validator\Services;

class FilterProvider
{
    /**
     * The filters / providers for the Validator package
     * The classes are grouped by validation type and sorted alphabetically.
     *
     * @var array
     */
    public $providers = array(
        /*----[ Custom validation ]-----------------------------------------------------------------------------------*/
        \Vendor\Package\Namespace\CustomFilters\YourCustomFilter::class,
    );
}
```

#### Step five
* When you create a validation filter it is important that you add a response message which should be prompted to the user.
* For the response messages we use the package `mediadevs/response-handler` on version `v1.0.0`.
* For the response message you can also add a translation per language. You can check the file for more information. It is not that exiting =)

#### Step six
Congratulations, you made your own filter! Now publish it to the world to use it!!


## TODO:
- **New validation filters**
    - credit_card
    - iban
    - address (Location)
    - datetime format / pattern
- **Project changes**
    - Add a method where you can manually overwrite response translations
    - Create a facade with a different and lightweight approach for alternative validation
- **Translations**
    - Swedish translation
    - German translation
- **Contributing**
    - Write guides on how to contribute to the library
- **General**
    - Make code more accessible for older versions of PHP
    - Work on implementation for several library's (Symphony, Laravel, Yii, CackePHP, etc..)

## Inspiration
This library took some heavy inspiration from some other libraries, I just wanted an easier and more
structured way to validate my `$_POST[]`. Since some other library's / packages weren't that structured and just stored 
all the filters in one file I decided to build my own.

**Special thanks to:**
- https://github.com/Wixel/GUMP
- https://github.com/davidecesarano/Validation


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email contact@mediadevs.nl instead of using the issue tracker.

## Credits

- [Mike van Diepen](https://github.com/mikevandiepen)
- [All Contributors]()

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mediadevs/form-assist.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mediadevs/form-assist/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mediadevs/form-assist.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mediadevs/form-assist.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mediadevs/form-assist.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mediadevs/form-assist
[link-travis]: https://travis-ci.org/mediadevs/form-assist
[link-scrutinizer]: https://scrutinizer-ci.com/g/mediadevs/form-assist/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mediadevs/form-assist
[link-downloads]: https://packagist.org/packages/mediadevs/form-assist
[link-author]: https://github.com/mikevandiepen
[link-contributors]: ../../contributors
