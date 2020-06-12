<?php
class koneksi
{

/*function __construct()
{
$koneksi2= mysqli_connect(“localhost”,”root”,””,”latkom″);

// Check connection
if (mysqli_connect_error()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}
}*/
public function get_koneksi()
{
$conn= mysqli_connect("localhost","root","","lat_p13");

// Check connection
if (mysqli_connect_error()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

return $conn;
}
}

$konek =new koneksi();
$koneksi=$konek->get_koneksi();

?>
