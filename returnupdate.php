<?php
include('connection.php');
$bookId = $_GET['updateid'];
$sql="Select * from returnbook where bookId=$bookId";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$UserId = $row['UserId'];
$BookId = $row['BookId'];
$ReturnDate = $row['ReturnDate'];
$Comment = $row['Comment'];

if(isset($_POST['submit'])){
    $UserId = $_POST['UserId'];
    $BookId = $_POST['BookId'];
    $ReturnDate = $_POST['ReturnDate'];
    $Comment = $_POST['Comment'];


    $query= mysqli_query($conn,"UPDATE returnbook SET bookId='$BookId', UserId='$UserId', ReturnDate='$ReturnDate', Comment='$Comment'
    where bookId=$bookId");
    if($query){
       
       header('location:returnbook.php');
    }else{
        echo "<script> alert('Data insertion failed')</script>";
    }
}

?>


<html>
    <head>
        <link rel="stylesheet" href="nav1.css">
    </head>
    <style>
    body{
        background:url(background.jpg);
        background-size: cover;
        
    }
    .container{
        display: flex;
     align-items: center;
     margin-left: 450px;
     margin-top: 60px;
    }
    
    .two{
        border:4px solid #f0e68c;
        border-radius: 15px ;
        padding:40px;
        width:30%;
        color:white;
       text-align: center; 
         
    }
    .two label{
       font-size: 20px;
       font-weight: bold;
       text-shadow: 1px 1px 2px black;
    }
    .two input::placeholder{
        font-size:10.5px;
    }
    button{
        font-size:18px;   
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    button:hover{
    background-color: peachpuff;
    color:black;
}
</style>

    <body>
        <nav>
            <ul>
              <div id="w">
                  <li><img src="images/logo.png" alt="Bookify Logo" width="60px" height="60px"></li>        
              <li>bookify</li>
              </div>
              <li><a href="returnbook.php">Go Back </a></li> 
            </ul>
            </nav>
            <div class="container">
            
            <div class="two">

            <form method="POST" autocomplete="off">
                <label>User Id</label><br>
                <input type="text" name="UserId" placeholder=" Enter user id" value="<?php echo $UserId;?>"><br><br>
                <label>Book Id</label><br>
                <input type="number" name="BookId" placeholder=" Enter id of the book" value="<?php echo $BookId;?>"><br><br>
                <label>Return Date</label><br>
                <input type="date" name="ReturnDate"  placeholder="DD-MM-YYYY" value="<?php echo $ReturnDate;?>"><br><br>
                <label>Comment</label><br>
                <input type="description" name="Comment" placeholder=" Enter comment if any" value="<?php echo $Comment;?>"><br><br>
                <button type="submit" name="submit">Issue Book</button>
         
                </form>
            </div>
        </div>
