<?php
include ('connection.php');
if(isset($_GET['deleteid'])){
    $BookId=$_GET['deleteid'];
    $sql="delete from returnbook where BookId='$BookId'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:returnbook.php');
}else{
    die(mysqli_error($conn));
}
}
?>