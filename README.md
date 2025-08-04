# Hotel Management System

Proyek XII RPL - Sistem manajemen hotel untuk mengelola reservasi kamar, pembayaran, dan data pengguna.

## Role Pengguna
- **Admin**: Kelola kamar, user, laporan
- **Kasir**: Transaksi pembayaran
- **User**: Pemesanan dan cek status kamar

## Fitur Utama
- CRUD Kamar
- Reservasi kamar oleh user
- Pembayaran oleh kasir
- Laporan transaksi

## Teknologi yang Digunakan
- GitHub (repo & dokumentasi)
- Balsamiq (wireframe UI)
- dbdiagram.io (database)
- HTML/CSS atau framework (misal Laravel atau React)

## Alur Aktivitas Tiap Role

### User (Tamu)
1. Register & Login
2. Pilih kamar dan lakukan booking
3. Menunggu persetujuan Admin
4. Bayar ke Kasir
5. Cek status & histori pemesanan

### Kasir
1. Login
2. Cek transaksi dari tamu
3. Input pembayaran
4. Cetak bukti pembayaran

### Admin
1. Login
2. Kelola kamar & user
3. Approve booking
4. Lihat laporan transaksi
