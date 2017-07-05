<----- libarary pdf ------>
sudah ada libraries pdf
untuk memanggil libarary pdf nya hanya perlu di load($this->load->libarary();)
trus jangan lupa menghapus script require_once('tcpdf_include.php'); pada example apabila menggunakan example
<----- end libarary pdf ----->

<---- RAJA ONGKIR ---->
```php
$this->load->library('rajaongkir');
```
### Melakukan request
```php
//Mendapatkan semua propinsi
$provinces = $this->rajaongkir->province();

//Mendapatkan semua kota
$cities = $this->rajaongkir->city();

//Mendapatkan data ongkos kirim
$cost = $this->rajaongkir->cost(501, 114, 1000, "jne");
```
### Response
Response yang dihasilkan berupa string JSON balasan dari RajaOngkir.
### Dokumentasi lebih lanjut
Silakan lihat code di dalam library, di dalamnya terdapat komentar yang dapat membantu Anda.
### Referensi
[Dokumentasi RajaOngkir](http://rajaongkir.com/dokumentasi)

<---- END of RAJA ONGKIR --->
