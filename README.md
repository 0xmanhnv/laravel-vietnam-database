Admin template

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]



## Install

Via Composer

``` bash
$ composer require giaphiep/productcrud
```

## Usage

Method 1: Run

``` bash
$ php artisan productcrud:install
```

Method 2:

1. In configs/app.php file, add the following to the providers array (optional in version >= 5.5)
``` php
GiapHiep\Productcrud\ProductcrudServiceProvider::class,
Yajra\DataTables\DataTablesServiceProvider::class,

```
and in aliases array
``` php
'DataTables' => Yajra\DataTables\Facades\DataTables::class,
```

2. Run commands to publish the package’s config and assets and database
``` bash
$ php artisan vendor:publish
$ php artisan migrate
```

3. Go to  domain/product and check it. 


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hiep.giapvan@gmail.com instead of using the issue tracker.

## Credits

- [Giáp Hiệp][https://giaphiep.com]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/giaphiep/productcrud.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/giaphiep/productcrud/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/giaphiep/productcrud.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/giaphiep/productcrud
[link-travis]: https://travis-ci.org/giaphiep/productcrud
[link-scrutinizer]: https://scrutinizer-ci.com/g/giaphiep/productcrud/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/giaphiep/productcrud
[link-downloads]: https://packagist.org/packages/giaphiep/productcrud
[link-author]: https://github.com/giaphiep
[link-contributors]: ../../contributors
