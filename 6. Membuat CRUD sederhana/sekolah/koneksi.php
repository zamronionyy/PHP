<?php 
$konek = mysqli_connect("localhost","root","","sekolah");
 

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
} 
    
?>