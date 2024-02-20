<?php
include('connection.php');
if(isset($_POST['submit'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Address= $_POST['Address'];
    $UserId= $_POST['UserId'];
    $Password= $_POST['Password'];


    $query= mysqli_query($conn,"INSERT INTO AddUser (FirstName, LastName, Gender, DateOfBirth, Email, PhoneNumber, Address, UserId, Password) VALUES('$FirstName', '$LastName', '$Gender', '$DateOfBirth', '$Email', '$PhoneNumber', '$Address', '$UserId', '$Password')");
    if($query){
        header('location:viewusers.php'); ;
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
    .one{
        border:4px solid #f0e68c;
        border-radius: 15px ;
        padding:40px;
        width:30%;
        color:white;
       text-align: center; 
         
    }
    .one label{
       font-size: 20px;
       font-weight: bold;
       text-shadow: 1px 1px 2px black;
    }
    .one input::placeholder{
        font-size:10.5px;
    }
    
    .one .submit-button{
        font-size:20px;
        color:black;
        background-color:peachpuff;   
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    .one.submit-button:hover{
        background-color: peachpuff;
        color:black;
    }
    .container{
        display: flex;
     align-items: center;
     margin-left: 450px;
     margin-top: 60px;
    }
    
    h2{
        text-align: center;
        margin-top: 30px;
        font-size: 35px;
       font-weight: bolder;
       text-shadow: 1px 1px 2px black;
        color:white;
    } 
</style>

<body>
    <nav>
        <ul>
          <div id="w">
              <li><img src="images/logo.png" alt="Bookify Logo" width="60px" height="60px"></li>        
          <li>bookify</li>
          </div>
          <li><a href="admin_dashboard.php">Go Back </a></li> 
        </ul>
        </nav>
        <div class="container">
            <div class="one"> 
            <form method="POST" autocomplete="off">
    <label>First Name</label><br>
    <input type="text" name="FirstName" placeholder="Enter user's first name" required><br><br>

    <label>Last Name</label><br>
    <input type="text" name="LastName" placeholder="Enter user's last name" required><br><br>

    <label for="Gender">Gender</label><br>
    <input type="text" name="Gender"placeholder="Enter user's gender" required><br><br>

    <label>Date of Birth</label><br>
    <input type="date" name="DateOfBirth" placeholder="DD-MM-YYYY" required><br><br>

    <label>Email</label><br>
    <input type="email" name="Email" placeholder="Enter user's email" required><br><br>

    <label>Phone Number</label><br>
    <input type="number" name="PhoneNumber" placeholder="Enter user's number" required><br><br>

    <label>Address</label><br>
    <input type="text" name="Address" placeholder="Enter user's address" required><br><br>

    <label>User Id</label><br>
    <input type="text" name="UserId" placeholder="Enter user's id" required><br><br>
    <label>Password</label><br>
    <input type="password" name="Password" placeholder="Enter a password" required><br><br>

    <button type="submit" name="submit">Add User</button><br>
</form>

                        </div>
        </div>
                        