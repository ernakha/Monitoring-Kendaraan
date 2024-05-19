<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Email & Password 

Jalankan seeder pada terminal

```
php artisan db:seed
```

Login menggunakan email dan password dibawah
```
email : admin@gmail.com
pass  : 12345678

email : pengelola@gmail.com
pass  : 12345678

```

## Information
```
Mysql version : 8.0.30
PHP version : 8.3.4
Framework : Laravel, PHP
```

<img src="ERD.jpg" alt="ERD">

<img src="Diagram.png" alt="activity">

## Guide
A. Admin
1. Login sebagai Admin.
2. Input data kendaraaan melalui halaman "Kendaraan", pilih "Data Kendaraan" dan tekan button "Tambah Kendaraan", jika data sudah terisi klik simpan.
3. Input data pengemudi melalui halaman "Pengemudi" dan tekan button "Tambah Pengemudi", jika data sudah terisi klik simpan.
4. Input data pemesanan melalui halaman "Pesan Kendaraan" dan tekan tombol plus, jika data sudah terisi klik simpan.
5. Input kendaraan yang akan diservice melaluiu halaman "Kendaraan", pilih "Service Kendaraan" dan tekan button "Tambah Jadwal Service", jika data sudah terisi klik simpan.

B. Pengelola
1. Login sebagai Pengelola.
2. Masuk ke halaman "Pesan Kendaraan", klik tombol "Lihat" kemudian ubah status yang awalnya "Proses" menjadi "Diterima" atau "Ditolak"
