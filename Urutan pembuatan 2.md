Instalasi CodeIgniter 4

1. Download package CI4, lalu ekstrak
2. Rename nama folder root aplikasinya dengan nama 3. sendiri (satu kata tanpa spasi).
4. Pindahkan ke folder htdocs

Konfigurasikan agar CI agar dapat berjalan di server xampp
1. Pindahkan seluruh file dalam folder public ke luar (ke folder root aplikasi)
2. Buka file index.php, hilangkan ../ pada bagian  require FCPATH
3. Konfigurasi file app/Config/App.php, edit Base URl menjadi localhost/namafolderroot
4. Konfigurasi file app/Config/Paths.php, tambahkan $publicDirectory = __DIR__ . '/../'; di akhir sebelum tutup kurawal } 
5. Buat database baru (namanya samakan dengan nama folder root aplikasinya)

Konfigurasikan file env
1. rename file env menjadi .env
2. aktifkan dan ubah # CI_ENVIRONMRNT = production menjadi CI_ENVIRONMENT = development
3. aktifkan semua bagian database.default
database.default.database = CI4 ubah menjadi database.default.database = namadatabase
4. buang root pada bagian database.default.password

untuk download icons bootstrap, buka di browser **https://github.com/twbs/icons/releases/download/v1.13.1/bootstrap-icons-1.13.1.zip**

Praktikum Lanjutan

1. Pada folder rootaplikasi Buat Folder assets

2. Extract Folder bootstrap-5.0.2-dist, copy folder css \& js nya ke folder assets pada aplikasi anda

3. Extract Folder bootstrap-icons-1.13.1 copy folder bootstrap-icons-1.13.1 ke folder assets pada aplikasi anda

4. Pada folder **app/Views** buat folder **layouts** 

5. Pada folder layouts buat 3 file bernama **main.php**, **menu.php** dan **dashboard.php** ketikkan seperti contoh

6. Modifikasi file app/Controllers/Home.php ubah bagian return view('welcome\_message'); menjadi return view('layouts/dashboard');


AUTENTIFIKASI (LOGIN USER)
1. Buat tabel users (id_user:int(10), nama:varchar(30), username:varchar(30), role:enum(admin, user), password:varchar(30), foto:text(100)) → password di hash
2. Buat file UsersModel.php di 📁 model
3. Buat file Auth.php di 📁 controller
4. Buat file login.php di 📁 Views/auth → copy dari template & sesuaikan dengan kebutuhan → sesuiakan action form & method
5. Buat file AuthFilter.php (sebagai midleware/filter) & RoleFilter.php di 📂 app/Filters
6. Tambahkan kode di bawah pada file App/Config/Filters.php
```
  'auth' => \App\Filters\AuthFilter::class,
  'role' => \App\Filters\RoleFilter::class,
```
7. Tambahkan rute login, proseslogin & logout di App/Config/Routes.php
8. Buat Filter Hak Akses & Terapkan di Routes.php
9. Tambahkan tombol logout di menu / main


Link panduan
**https://github.com/AhmadMauludin/persiapanukk**







