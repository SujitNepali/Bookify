<?php
$servername='localhost';
$username='bookify';
$password= '';
$database='bookify';
 $conn= new mysqli($servername, $username, $password, $database);
 if ($conn->connect_error){
    die('Connection failed'.mysqli_connect_error() );
 }
 

 ?>