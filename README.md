# Hotel Management System


## Role Pengguna
- **Admin**: Kelola data kamar, pengguna, approval booking, dan laporan
- **Kasir**: Kelola transaksi pembayaran dari tamu
- **User (Tamu)**: Booking kamar dan cek status/riwayat pesanan

## Fitur Utama
- Manajemen data kamar (CRUD)
- Reservasi kamar oleh user
- Approval reservasi oleh admin
- Pembayaran oleh kasir
- Riwayat transaksi dan laporan bulanan
- Sistem login multi-role

## Teknologi yang Digunakan
- **GitHub** → Repositori & dokumentasi
- **Balsamiq** → Desain UI (wireframe)
- **dbdiagram.io** → Desain database (ERD)
- **HTML/CSS**, bisa dikembangkan dengan **Laravel**, **React**, atau lainnya

## User (Tamu)
1. Registrasi & login
2. Memilih kamar dan mengajukan booking
3. Menunggu approval dari Admin
4. Melakukan pembayaran ke Kasir
5. Melihat status dan histori pemesanan

## Kasir
1. Login
2. Melihat transaksi yang perlu diproses
3. Mencatat pembayaran (tunai/transfer/qris)
4. Mencetak/menyimpan bukti pembayaran

## Admin
1. Login ke sistem
2. Mengelola data kamar & data pengguna
3. Menyetujui pemesanan dari user
4. Melihat statistik & laporan transaksi harian/bulanan

## Database Design (ERD)
- `roles`: Tipe pengguna (Admin, Kasir, User)
- `users`: Informasi pengguna
- `rooms`: Data kamar hotel
- `bookings`: Reservasi dari user
- `payments`: Data transaksi pembayaran
- `vouchers`: Kode promo (opsional)
- `booking_vouchers`: Relasi antara booking dan voucher
- `carts`: Data pemesanan sebelum checkout (opsional)

