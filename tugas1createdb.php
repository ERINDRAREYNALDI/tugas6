<?php
// untuk deklarasi nama server, username, dan password
$servername="localhost";
$username="root";
$password="";

// untuk membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// untuk mengecek koneksi
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

// untuk membuat database
$sql= "CREATE DATABASE bukutamu";
if(mysqli_query($conn, $sql)){
    echo "Database created succesfully";
} else{
    echo "Error creating database". mysqli_error($conn);
}

// untuk menghentikan koneksi
mysqli_close($conn);
?>