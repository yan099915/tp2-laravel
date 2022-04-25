1. templating engine blade membantu menggunakan variable dengan {{  }} dicompile otomatis dengan blade menjadi php echo
2. php artisan make:controller digunakan untuk membuat controller suatu model dengan method CRUD yang terbuat secara otomatis.
3. php artisan make:model digunakan untuk membuat struktur model secara mudah beserta dengan file migration agar dapat membuat table pada database secara otomatis tanpa perlu menuliskan sql query secara manual
4. php artisan migrate untuk membuat table pada database sesuai dengan seluruh model yang kita buat sebelumnnya
5. php artisan migrate:rollback untuk menghapus suluruh table yang ada sesuai dengan model yang dibuat
6. php artisan migrate:fresh untuk melakukan pembuatan table dengan menghapus terlebih dahulu table yang telah dibuat sebelumnya pada database sesuai dengan model yang kita miliki