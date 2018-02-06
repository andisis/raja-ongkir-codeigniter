# Raja Ongkir Library for CodeIgniter 3.x
Merupakan library CodeIgniter untuk mengkonsumsi API dari [RajaOngkir](http://rajaongkir.com).
Library ini adalah update dari library milik agan [hok00age](https://github.com/hok00age/rajaongkir-codeigniter) yang sudah lama tidak di update. Library ini dapat digunakan untuk semua tipe Akun (starter, basic dan pro).


## Instalasi
Copy file sesuai dengan lokasinya masing-masing.
## Konfigurasi
Buka "**application/config/rajaongkir.php**", masukkan API key dan ubah tipe akun.
## Contoh Penggunaan
### Memuat library
```php
$this->load->library('rajaongkir');
```
### Melakukan request
```php
//Mendapatkan semua provinsi
$provinces = $this->rajaongkir->province();

//Mendapatkan semua kota
$cities = $this->rajaongkir->city();

//Mendapatkan kecamatan berdasarkan kota
$subdistrict = $this->rajaongkir->subdistrict(151); // city_id = 151

//Mendapatkan data ongkos kirim
$cost = $this->rajaongkir->cost(501, 114, 1000, "jne");
```
### Response
Response yang dihasilkan berupa string JSON balasan dari RajaOngkir.
### Dokumentasi lebih lanjut
Silakan lihat code di dalam library, di dalamnya terdapat komentar yang dapat membantu Anda.
### Referensi
[Dokumentasi RajaOngkir](http://rajaongkir.com/dokumentasi)
