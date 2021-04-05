<?php
// untuk deklarasi nama server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="bukutamu";

// untuk membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// untuk mengecek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// untuk membuat table
$sql= "CREATE TABLE buku_tamu(
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi text
)";
if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// untuk menghentikan koneksi
mysqli_close($conn);
?>