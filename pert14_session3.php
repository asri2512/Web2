<? php 
/ ******************************************** ***** *** 
Halaman ini merupakan halaman logout, dimana kita folder session yang ada. 
********************************************** **** *** / 
session_start ();
if ( isset ( $ _SESSION [ 'login' ])) {
belum disetel ( $ _SESSION );
session_destroy ();
// 
echo  "<h1> Anda sudah berhasil LOGOUT </h1>" ;
echo  "<h2> Klik <a href='Pert14_Session1.php'> di sini </a> untuk
MASUK kembali </h2> " ;
echo  "<h2> Anda sekarang tidak bisa masuk ke halaman
<a href='Pert14_Session2.php'> Pert14_Session2.php </a> lagi </h2> " ;
} 
?>