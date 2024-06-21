# Content Management System (CMS) Sederhana 
Membuat CMS Sederhana.  Assesment yang diberikan dari Eyden Creative

1. Buat 1 page website sepeti dengan contoh berikut,
https://cdn.dribbble.com/userupload/4104573/file/original-95940d3740395aa4460f3de8bfef7dec.jpg?compress=1&resize=2048x1536
*Asset image, icon, dan font family tidak perlu sama persis dengan contoh (asset bisa dicari dan diambil dari https://www.freepik.com/), namun untuk template dan peletakan komponen nya perlu disamakan.
2. Buat 1 halaman CMS (content management system) untuk keperluan mengubah konten (seperti text dan image) yang ada di dalam page yang dibuat pada soal nomor 1. Artinya semua konten pada page di soal nomor 1 tersimpan di dalam database.

    Submission:
    - file Laravel Project / native html,css,javascript (preferable untuk styling dengan Tailwind)
    - file sql

## features
- Landing Page
- CMS update content

## requirements
- php version 8.2
- laravel version 11.9
- database mysql
- laragon/xampp
- chrome
- composer

## installation

1. Clone repositori
    ```sh
    git clone https://github.com/fahmyfauzi/test-eyden.git
    ```
2. masuk ke dalam directori
    ```sh
    cd test-eyden
    ```
3. Instal composer
    ```sh
    composer install
    or
    composer update
    ```
4. Copy file .env.example 
    ```
    cp .env.example .env
    ```
5. Generate an app encryption key

    ```sh
    php artisan key:generate
    ```
6. Create database on your computer or phpMyAdmin
7. In the .env file, add database information to allow Laravel to connect to the database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=test_eyden
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
8. migrasi database atau import sql dari file ```test_eyden.sql```
    ```
    php artisan migrate --seed
    ```
7. install package
    ```
    npm install
    npm run build
    ```
    
8. storage laravel
    ```
    php artisan storage:link
    ```
    
9. jalankan project
    ```sh
   php artisan serve
    ```


## usage
- buka chrome masukan link ```test_eyden.test``` atau ``` http://127.0.0.1:8000/ ```
- akses ```test_eyden.test/login``` atau ``` laravel_didamelid.test/register ```
- akun dummy email : ```admin@gmail.com``` , password: ```password``` 
- login dan coba fitur-fiturnya

## credits

[Fahmy Fauzi ](https://github.com/fahmyfauzi)

