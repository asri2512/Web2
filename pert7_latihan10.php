< HTML >
< KEPALA >
< TITLE > Penggunaan In Array dengan Type Data </ TITLE >
</ KEPALA >
< BODY >
<?
$ tipe = array ( '1.10' , 5.0 , 1.13 );
if ( in_array ( '5.0' , $ tipe , TRUE )) {
 echo  "String \" 5.0 \ "ada di dalam array" ;
} lain {
 echo  "String \" 5.0 \ "tidak ada di dalam array" ;
}
echo  "<br />" ;
if ( in_array ( 1,13 , $ tipe , TRUE )) {
 echo  "Bilangan 1.13 ada di dalam array" ;
} lain {
 echo  "Bilangan 1.13 tidak ada di dalam array" ;
}
?>
</ BODY >
</ HTML >