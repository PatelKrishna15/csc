<p align="center"><a href="https://github.com/Nihirz/laravel-10-adminlte" target="_blank"><img src="package.png" width="400" alt="laravel Country State City Seeder"></a></p>

## Laravel Country, State, City Seeder Package

[![Latest Stable Version](https://poser.pugx.org/nihirz/csc/v)](https://packagist.org/packages/nihirz/csc)
[![Total Downloads](https://poser.pugx.org/nihirz/csc/downloads)](https://packagist.org/packages/nihirz/csc)
[![License](https://poser.pugx.org/nihirz/csc/license)](https://packagist.org/packages/nihirz/csc)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/nihirz/csc.svg?style=flat-square)](https://packagist.org/packages/nihirz/csc)

 Hi, Here I created a package for country, state & and city seeder. You can install and use it in your laravel project. If you are using this package then you can give it a star this package is free, In the future I Will add the country code &  phone initials.

## What is this library?

This is a library called CSC aka Country-State-City Seeders. When I was developing, I faced the issues so often that where can I get the seeder files? & how can I manage it? Is there a relationship or not?

So I googled & found some seeders files & with that help, I made this library which already has a relationship between their models.

## Why do you need this?

If your project needs the country state & city dropdown & you have no idea about how it works I already made the library for it. Here are some of the points.

- Open Source & Free

- Easy to install

- Easy to modify

- Models have already relationship

## For Installation

- To install this package you have to install this package using composer.

## Note:

Make sure you do not have any country,state & city models or migrations then remove it other wise this will create the conficts.

# How to install it?

```bash
composer require nihirz/csc
```

## For Publishing providers

```bash
php artisan vendor:publish --provider=Nihirz\csc\CSCServiceProvider
```

The previous command publishes the files in your project.

Now you can simply run the following commands.

```bash
php artisan optimize:clear
php artisan config:cache
```

This will clear your caches

```bash
php artisan migrate
```

This will migrate the tables into databases.

Now simply add this line in your ```DataBaseSeeder.php``` file.

```bash
$this->call(CountryStateCityTableSeeder::class);
```

Now Simplay run the following command for the seed the database.

```bash
php artisan db:seed
```



## Friendly Note

- if you have any query about this package face some error or need support to update simply mail me<a href="mailto:testnihir@gmail.com"> here</a>.
- Sorry for my English & this type of short instruction. I'm learning if you are an expert please help me to improve.

# Connect with me
[![Twitter URL](https://img.shields.io/badge/Follow%20%40NihirZala-1DA1F2?style=social&logo=twitter)](https://twitter.com/NihirZala)

[![LinkedIn URL](https://img.shields.io/badge/Connect%20%40nihirzala-0077B5?style=social&logo=linkedin)](https://www.linkedin.com/in/nihirzala/)

[![Instagram URL](https://img.shields.io/badge/Follow%20%40inihirzala-ff69b4?style=social&logo=instagram)](https://www.instagram.com/inihirzala/)
