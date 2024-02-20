<?php
include ('connection.php');
if(isset($_GET['deleteid'])){
    $BookId=$_GET['deleteid'];
    $sql="delete from issuebook where BookId='$BookId'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:issuebook.php');
}else{
    die(mysqli_error($conn));
}
}
?>