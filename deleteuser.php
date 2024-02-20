<?php
include ('connection.php');
if(isset($_GET['deleteid'])){
    $UserId=$_GET['deleteid'];
    $sql="delete from adduser where UserId='$UserId'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:viewusers.php');
}else{
    die(mysqli_error($conn));
}
}
?>