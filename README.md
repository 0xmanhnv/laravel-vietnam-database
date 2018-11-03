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
$ composer require nguyenmanh1997/vietnam
```

## Usage

Method 1: Run

``` bash
$ php artisan productcrud:install
```

Method 2:

1. In configs/app.php file, add the following to the providers array (optional in version >= 5.5)
``` php
NguyenManh1997\VietNam\VietNamServiceProvider::class,


2. Run commands to publish the package’s config and assets and database
``` bash
$ php artisan vendor:publish
$ php artisan migrate
$ php artisan db:seed --class=DistrictsTable
$ php artisan db:seed --class=ProvincesTable
$ php artisan db:seed --class=WardsTable
```

3. Go to  database and check it. 


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

- [Nguyễn Mạnh][https://manhnv.com]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
