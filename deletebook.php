<?php
include ('connection.php');
if(isset($_GET['deleteid'])){
    $bookId=$_GET['deleteid'];
    $sql="delete from addbook where bookId=$bookId";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:viewbooks.php');
}else{
    die(mysqli_error($conn));
}
}
?>