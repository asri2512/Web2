<? php 
/ ******************************************** ***** *** 
Halaman ini merupakan halaman contoh atau sesi. Perintah session_start () harus
ditaruh di perintah pertama tanpa spasi di lapangan. Perintah session_start () harus ada pada
setiap halaman yang berhubungan dengan sesi 
********************************************** **** *** / 
session_start ();
if ( isset ( $ _POST [ 'Login' ])) {
$ pengguna = $ _POST [ 'pengguna' ];
$ pass = $ _POST [ 'pass' ];
// periksa login 
if ( $ user == "Badya Prisai Nugraha" && $ pass = "123456" ) {
// menciptakan sesi 
$ _SESSION [ 'login' ] = $ pengguna ;
// menuju ke halaman pemeriksaan 
echo  "<h1> Anda berhasil LOGIN </h1>" ;
echo  "<h2> Klik <a href='Pert14_Session2.php'> di sini
(Pert14_Session2.php) </a> 
untuk menuju ke halaman pemeriksaan " ;
} 
} lainnya 
?> 

< html > 
< kepala > 
< judul > Masuk di sini ... </ judul > 
</ head > 
< body > 
    < form  action = "" method = " post " > 
        < h2 > Masuk Di Sini ... </ h2 > 
            Username: < masukan  jenis = " text " nama =" pengguna " > < br > 
            Password: < masukan  jenis = " sandi " nama =" lulus " > < br >  < masukan  jenis =" mengirimkan " nama =" Login " value =" Log In " > 
    </ form > 
</ body > 
</ html > 