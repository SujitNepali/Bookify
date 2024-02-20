<?php
 $bookId = $_GET['bookId'];
 $title = $_GET['title'];
 $author = $_GET['author'];
 $genre = $_GET['genre'];
 $publication = $_GET['publication'];
 $pages = $_GET['pages'];
 $quantity = $_GET['quantity'];

$servername='localhost';
$username='bookify';
$password= '';
$database='bookify';
 $conn= new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("INSERT INTO AddBook(bookId, title, author, genre, publication, pages, quantity)
    VALUES(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssii ", $bookId, $title,$author,$genre,$publication,$pages, $quantity);
$stmt->execute();
echo "Book Added Successfully!";
$stmt->close();
$conn->close();
}
?>