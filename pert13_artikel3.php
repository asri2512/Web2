<? php 
$ connection = mysqli_connect ( "localhost" , "root" , "" , "artikel_db" );

$ perintah = mysqli_query ( $ koneksi , "PILIH * DARI artikel ORDER BERDASARKAN judul DESC" );
 
echo ( "
<h2> Daftar Artikel </h2> 
<br> <UL> 
" );

while ( $ row = mysqli_fetch_array ( $ perintah ))
{ 
$ id = $ baris [ 'id' ];
echo ( "
 <LI>
 $ baris [1] & nbsp;
 $ baris [2] & nbsp;
 $ baris [3] & nbsp;
 $ row [waktu] & nbsp;
 
<a href=\"pert13_artikel4.php?id=$id\"> Edit </a>
 & nbsp
 
<a href=\"pert13_artikel6.php?id=$id\"> Hapus </a> </LI> <br> " );
} 
echo ( "</table>" );
echo  "<br> <a href=\"pert13_artikel1.php\"> Tambah </a>" ;
echo  "<br> <a href=\"pert13_artikel1.php\"> Panel Admin </a>" ;
?>