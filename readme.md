<p align="center"><img src="https://www.erloom.id/img/erloom.png"></p>

## Tech Stack

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Tentang Tes

Tes ini bertujuan untuk memasukkan data user beserta urutan fibonacci yang dihubungkan kepada user tersebut.

## Requirement

- [SQLite](https://www.sqlite.org/index.html)
- **[Composer](https://getcomposer.org/)**
- **[PHP 7.2](https://www.php.net/downloads.php)**
- **[npm](https://www.npmjs.com/get-npm)**

## Setup Aplikasi

- Jalankan `composer install` pada aplikasi untuk menginstall dependency dari composer.
- Jalankan `php artisan migrate` pada aplikasi untuk menambah table pada Database.
- Jalankan `npm install` pada aplikasi untuk meng-install CSS dan JS.
- `php artisan serve` untuk memulai local enviroment aplikasi ini.

## Structure

Tes ini menggunakan aplikasi Laravel dengan struktur :

- Model: *app/UserTest*
- Controller: *app/Http/Controllers/TestController*
- View: *views/index.blade*
- Database: *database/dev.sqlite*

## Goals

Aplikasi diharapkan dapat :

- Input **nama** kedalam database.
- Setiap **nama** terasosiasi dengan angka yang merupakan urutan bilangan fibonacci, urutan tersebut bertambah dan terasosiasi ke **nama** sesuai dengan data terakhir yang di-input.
- View dapat memunculkan seluruh **nama** yang di-input.

## Problem

- Buatlah logic pada *TestController@store* saat **nama** di-input agar dapat menyimpan hasil fibonacci yang sesuai.
- Buatlah view pada *index.blade* agar dapat menampilkan seluruh **nama** yang telah di-input beserta bilangan fibonacci yang sesuai.