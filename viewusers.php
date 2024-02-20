<?php
include('connection.php');
?>
<html>
    <head>
    <html>
    <head>
        <link rel="stylesheet" href="nav1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
body{
        background:url(background.jpg);
        background-size: cover;
        
    }
    nav{
        margin-top: 5px;
        padding: 7px;
        margin-bottom: 5px;
    }
    table{
        margin-right: 9px;
        margin-left: 9px;
        margin-top: 9px;
        margin-top: 9px;
        max-width: 98.5%;
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
            <table class="table table-bordered">
  <thead>
    <tr>
    
      <th class="table-secondary" scope="col">First Name</th>
      <th class="table-secondary" scope="col">Last Name</th>
      <th class="table-secondary" scope="col">Gender</th>
      <th class="table-secondary" scope="col">Date Of Birth</th>
      <th class="table-secondary" scope="col">Email</th>
      <th class="table-secondary" scope="col">Phone Number</th>
      <th class="table-secondary" scope="col">Address</th>
      <th class="table-secondary" scope="col">User Id</th>
      <th class="table-secondary" scope="col">Password</th>
      <th class="table-secondary" scopr="col">Operations</th>
 
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from adduser";
    $result=mysqli_query($conn,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $FirstName= $row['FirstName'];
        $LastName=$row['LastName'];
        $Gender= $row['Gender'];
        $DateOfBirth=$row['DateOfBirth'];
        $Email= $row['Email'];
        $PhoneNumber=$row['PhoneNumber'];
        $Address= $row['Address'];
        $UserId= $row['UserId'];
        $Password= $row['Password'];
        echo '<tr class="table-warning">
        <td>'.$FirstName.'</td>
        <td>'.$LastName.'</td>
        <td>'.$Gender.'</td>
        <td>'.$DateOfBirth.'</td>
        <td>'.$Email.'</td>
        <td>'.$PhoneNumber.'</td>
        <td>'.$Address.'</td>
        <td>'.$UserId.'</td>
        <td>'.$Password.'</td>
        <td>
        <button class="btn btn-primary"><a href="updateuser.php? updateid='.$UserId.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteuser.php? deleteid='.$UserId.'" class="text-light" >Delete</a></button>
</td>
      </tr>';
    }
}

    ?>
   
  </tbody>
</table>
    </html>
