# TP4DPBO2024C1

## Janji
  Saya Boy Aditya Rohmaulana NIM 2203488 mengerjakan
  soal Tugas Praktikum 4 dalam mata kuliah DPBO untuk keberkahanNya
  maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. 

## Desain Program
Program ini adalah aplikasi web yang dibangun menggunakan PHP. Struktur dari project ini mengikuti pola desain Model-View-Controller (MVC).

### Model Database
![Diagram 1](https://github.com/boyaditya/TP4DPBO2024C1/assets/135103722/1a5a1616-7465-4a7b-9b4d-811278c2e767)
- Members adalah entitas yang merepresentasikan member dalam aplikasi. Ada beberapa operasi yang dapat dilakukan terhadap member, seperti melihat daftar semua member, membuat member baru, mengedit detail member, dan menghapus member.
- Subscription adalah entitas yang merepresentasikan subscription dalam aplikasi. Ada beberapa operasi yang dapat dilakukan terhadap subscription, seperti mendapatkan semua subscription, menambahkan subscription baru, menghapus subscription, dan memperbarui subscription.

### MVC
1. Model:
   - `DB.class.php`: Kelas ini bertindak sebagai wrapper untuk operasi database. Ini menyediakan metode untuk membuka dan menutup koneksi database, mengeksekusi query, dan mengambil hasil query. Kelas ini digunakan oleh kelas model lainnya untuk berinteraksi dengan database.
   - `Members.class.php` dan `Subscription.class.php`: Kedua kelas ini berfungsi sebagai model untuk entitas 'Members' dan 'Subscription'. Mereka berisi metode untuk mengambil, memperbarui, dan menghapus data member dan subscription dari database.
2. Views:
   Folder views berisi kelas-kelas yang berfungsi untuk merender tampilan atau antarmuka pengguna. Mereka menerima data dari controller, dan merender HTML yang menampilkan data tersebut kepada pengguna.
3. Controller:
   Folder controllers berisi kelas-kelas yang berfungsi sebagai pengendali dalam pola arsitektur MVC. Mereka mengambil data dari model, memprosesnya jika perlu, dan merender tampilan yang sesuai.

## Alur Program
Fitur utama yang dapat dilakukan oleh user:  
1. Melihat Daftar Member: Pengguna dapat melihat daftar semua member. Ini dilakukan dengan memanggil metode index pada MembersController.  
2. Membuat Member Baru: Pengguna dapat membuat member baru. Ini dilakukan dengan memanggil metode createPage dan add pada MembersController.  
3. Mengedit Member: Pengguna dapat mengedit detail member. Ini dilakukan dengan memanggil metode editPage dan edit pada MembersController.  
4. Menghapus Member: Pengguna dapat menghapus member dengan memberikan ID member sebagai parameter dalam permintaan GET. Ini dilakukan dengan memanggil metode delete pada MembersController.

## Dokumentasi
https://github.com/boyaditya/TP4DPBO2024C1/assets/135103722/c38e6a44-67eb-4cbc-aef0-bfdf1d87fe35

![2024-05-01](https://github.com/boyaditya/TP4DPBO2024C1/assets/135103722/3b973485-620b-41d7-9829-8e36edb5676b)

![2024-05-01 (1)](https://github.com/boyaditya/TP4DPBO2024C1/assets/135103722/2add2248-b59b-4774-ac1b-573e4cd18a67)




