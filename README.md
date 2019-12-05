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
[![Minimum PHP Version](https://img.shields.io/badge/php-_%5E7.2-8892BF.svg)](https://github.com/symfony/symfony)
[![StyleCI](https://github.styleci.io/repos/222317005/shield?branch=master)](https://github.styleci.io/repos/222317005)

## Be aware!
Not everything has been tested yet, use on own risk.

## Install

Via Composer

``` bash
$ composer require mediadevs/validator
```

Via GIT
``` bash
HTTPS:
git clone https://github.com/mediadevs/validator.git

SSH:
git clone git@github.com:mediadevs/validator.git
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

##### Basic
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `equal` | `equals` `equal_to` `equals_to` | Whether the value of the field equals the value of the threshold. | `true` | **Basic** |
| `not_equal` | `not_equal_to` | Whether the value of the field does not equal the value of the threshold. | `true` | **Basic** |
| `regular_expression` | `regex` `expression` | Whether the value of the field matches the regular expression threshold pattern.  | `true` | **Basic** |
| `required` | `req` | Whether the field is set and is not empty.| `false` | **Basic** |
| `array` | `arr` | Whether the value of the field is an array. | `false` | **Basic** |
| `boolean` | `bool` | Whether the value of the field is a boolean. | `false` | **Basic** |
| `float` | | Whether the value of the field is a float. | `false` | **Basic** |
| `integer` | `int` | Whether the value of the field is an integer. | `false` | **Basic** |
| `null` | | Whether the value of the field is null**. | `false` | **Basic** |
| `numeric` | `num` | Whether the value of the field is numeric. | `false` | **Basic** |
| `string` | `str` | Whether the value of the field is a string. | `false` | **Basic** |

##### Date
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `date_after` | `after_date` `pre_date` | Whether the value of the field is after the threshold date. | `true` |  **Date** |
| `date_before` | `before_date` `post_date` | Whether the value of the field is before the threshold date. | `true` | **Date** |
| `date_between` | `between_dates` | Whether the value of the field between the two threshold dates. | `true` | **Date** |

##### Email
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `allowed_email_providers` | `allowed_providers` `email_allowed` `provider_allowed` `email_provider_allowed` `email_whitelist` | Whether the domain of the email address is from an allowed / whitelisted provider. | `true` | **Email** |
| `blocked_email_providers` | `blocked_providers` `email_blocked` `provider_blocked` `email_provider_blocked` `email_blacklist` | Whether the domain of the email address is from an blocked / blacklisted provider. | `true` | **Email** |
| `email` | `valid_email` `email_valid` | Whether the value of the field is an email. | `false` | **Email** |
| `email_provider_exist` | `provider_exists` | Whether the provider of the email exists and is a reachable host. | `false` | **Email** |

##### File
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `allowed_file_extensions` | `allowed_extensions` `file_extensions` | Whether the file has an allowed extension. | `true` | **File** |
| `allowed_file_mime_type` | `allowed_mime_type` `allowed_file_type`  `file_mime_type` | Whether the file has an allowed mime-type. | `true` | **File** |
| `maximum_file_size` | `max_file_size` `maximum_size`  `file_size`  `max_size` | Whether the file is lesser or equal to the maximal file size. | `true` | **File** |

##### Host
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `domain` | | Whether the value of the field is a domain name.| `false` | **Host** |
| `ip` | `ip_address` | Whether the value of the field is an IP address. | `false` | **Host** |
| `ipv4` | `ipv4_address` | Whether the value of the field is an IPv4 address. | `false` | **Host** |
| `ipv6` | `ipv6_address` | Whether the value of the field is an IPv6 address. | `false` | **Host** |
| `mac` | `mac_address` | Whether the value of the field is an MAC address | `false` | **Host** |
| `reachable_address` | `website_live` `test_host` | Whether the entered domain name / ip address is reachable. | `false` | **Host** |
| `url` | | Whether the value of the field is an url. | `false` | **Host** |

##### Numeric
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `between` | `numeric_between` `num_between` | Whether the numeric value is between the two numeric threshold values. The order of the numeric threshold values is not important. | `true` | **Numeric** |
| `greater_than` | `gt` | Whether the value of the field is greater than the threshold. | `true` | **Numeric** |
| `greater_than_or_equal_to` | `gte` | Whether the value of the field is greater or equal to the threshold. | `true` | **Numeric** |
| `less_than` | `lt` | Whether the value of the field is lesser than the threshold. | `true` | **Numeric** |
| `less_than_or_equal_to` | `lte` | Whether the value of the field is lesser or equal to the threshold. | `true` | **Numeric** |
| `maximum` | `max` | Whether the value of the field has less than the maximum value of the threshold.| `true` | **Numeric** |
| `minimum` | `min` | Whether the value of the field has the minimum value of the threshold. | `true` | **Numeric** |

##### Payment
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `credit_card` | `cc` | Whether the credit card which the user has entered is valid. | `false` | **Payment** |
| `iban` | | Whether the IBan number which the user has entered is valid. | `false` | **Payment** |

##### String
| Filter | Aliases | Functionality | Arguments | Category |
|---:|---|:---:|---|:---|
| `contains` | | Whether the value of the field contains the threshold substring. | `true` | **String** |
| `ends_with` | `ends` | Whether the value of the field ends with the threshold substring. | `true` | **String** |
| `exact_length` | `exact` | Whether the value of the field matches the exact threshold length. | `true` | **String** |
| `maximum_length` | `max_length` `maxlen` | Whether the string length of the field has less characters then the maximal required threshold length. | `true` | **String** |
| `minimum_length` | `min_length` `minlen` | Whether the string length of the field has the minimal required threshold length. |`true` | **String** |
| `starts_with` | `starts` | Whether the value of the field starts with the threshold substring. | `true` | **String** |

## Create your own validation filter
Creating a custom validation filter is not difficult, I have tried to make it as simple and streamlined as possible. 
This library is also structured to have each filter as a standalone class, all the classes will be registered in
the service provider. Every filter can have an infinite amount of aliases (as long as the alias or the identifier is unique).

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

[ico-version]: https://img.shields.io/packagist/v/mediadevs/validator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mediadevs/validator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mediadevs/validator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mediadevs/validator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mediadevs/validator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mediadevs/validator
[link-travis]: https://travis-ci.org/mediadevs/validator
[link-scrutinizer]: https://scrutinizer-ci.com/g/mediadevs/validator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mediadevs/validator
[link-downloads]: https://packagist.org/packages/mediadevs/validator
[link-author]: https://github.com/mikevandiepen
[link-contributors]: ../../contributors
