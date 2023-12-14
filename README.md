## Installation contact package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nihirz/csc.svg?style=flat-square)](https://packagist.org/packages/nihirz/csc)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/Nihirz/csc/Tests?label=tests)](https://github.com/Nihirz/csc/actions)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vendor/package/Check%20&%20fix%20styling?label=code%20style)](https://github.com/Nihirz/csc/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/Nihirz/csc.svg?style=flat-square)](https://packagist.org/packages/vendor/package)



- Hi, Here I created a package for country, state & and city seeder. You can install and use it in your laravel project. If you are using this package then you can give it a star this package it's free.
## For Installation

- To install this package you have to install this package using composer.

## Note:

Make sure you do not have any country,state & city models or migrations then remove it other wise this will create the conficts.

- Installation command

```bash
composer require nihirz/csc
```

## For Publishing providers

```bash
php artisan vendor:publish --provider=Nihirz\csc\CSCServiceProvider
```

- After the installation you have to run the following commands.

```
php artisan optimize:clear
php artisan config:cache
```

- And Done.

## Friendly Note

- if you have any query about this package or face some error or need support to update simply mail me<a href="mailto:testnihir@gmail.com"> here</a>.
