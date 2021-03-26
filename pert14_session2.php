<? php 
/ ******************************************** ***** ** 
Halaman ini merupakan contoh halaman pemeriksaan. Sesi pemeriksaan biasanya
dilakukan jika suatu halaman memiliki akses terbatas. Misalnya harus terlebih dahulu masuk.
********************************************** **** ** / 
session_start ();
// pemeriksaan sesi 
if ( isset ( $ _SESSION [ 'login' ])) {
// jika sudah login 
// menampilkan sesi isi 
echo  "<h1> Selamat Datang" . $ _SESSION [ 'login' ]. "</h1>" ;
echo  "<h2> Halaman ini hanya bisa diakses jika Anda sudah login </h2>" ;
echo  "<h2> Klik <a href='Pert14_Session3.php'> di sini
(Pert14_Session3.php) </a> untuk LOGOUT </h2> " ;
} lain {
// sesi belum ada artinya belum login 
die ( "Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='Pert14_Session1.php'> di sini </a> " );
} 
?>