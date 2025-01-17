## Clone project ke komputer anda
Clone project ini dengan mengetikkan perintah di bawah
> git clone https://github.com/Afigo04/laravel-web-lanjut.git

Setelah terinstall pindah ke folder laravel-web-lanjut
> cd laravel-web-lanjut

## Install semua dependencies
Lakukan penginstallan dependencies dengan mengetikkan perintah di bawah
> composer install

## Pindahkan file dummy_data
> xcopy public\\dummy_data\\* storage\\app\\public /s /e /i

## Copy .env.example ke .env
> copy .env.example .env

## Jalankan command artisan di bawah ini secara terurut
> php artisan key:generate
> php artisan migrate
> php artisan make:filament-user

Command artisan diatas untuk membuat user admin

## Jalankan perintah dibawah secara terurut
> php artisan db:seed
> php artisan storage:link

## Lakukan penginstalan dependencies tailwind
> npm install
> npm run build

## Untuk menjalankan laravel pastikan selalu menjalankan perintah dibawah
> npm run dev
> php artisan serve
Sekarang aplikasi web sudah berjalan di komputer masing-masing. Jika ada masalah bisa ditanyakan.
