## Laravel 7.30.1

Ini adalah sebuah repo yang berisikan CRUD sederhana menggunakan Laravel.

## Cara instalasi
- clone repo ini : `git clone https://github.com/AaEzha/tutorial-laravel.git`
- masuk ke direktori projek : `cd tutorial-laravel`
- install dependencies : `composer install`
- buat file .env : `cp .env.example .env`
- atur detail database
- buat key : `php artisan key:generate`
- cache config : `php artisan config:cache`
- migrate data : `php artisan migrate`
- jalankan : `php artisan serve`

## Selanjutnya

Untuk login, kamu harus melakukan register terlebih dahulu.

Setelah berhasil login, klik pada menu CRUD untuk melakukan simulasi proses CRUD.

Proses CRUD tersebut ada di file `CrudController.php` pada folder `app\Http\Controllers`

## Fitur

-
