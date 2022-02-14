<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## First Setup
- Tulis di terminal **[composer install](https://stackoverflow.com/questions/41975092/install-laravel-using-composer)**
- Buatlah copy dari .env.example menjadi .env (file .env tidak included pada github)
- Konfigurasi file .env sesuai kebutuhan back-end 
- Buat database nya di xampp sesuai file .env
- Tulis di terminal **[php artisan key:generate](https://stillat.com/blog/2016/12/07/laravel-artisan-key-command-the-keygenerate-command)**
- Tulis di terminal **[php artisan migrate:fresh --seed](https://laravel.com/docs/8.x/seeding#running-seeders/)**
- Setelah table-tabel sudah terbentuk dan terisi 
- Maka secara otomatis sudah terintegrasi dengan resource gambar pada folder (' public/books ')
- Tulis di terminal **[php artisan serve](https://laravel.com/docs/8.x/installation#installation-via-composer)**
