<?php
include('connection.php');
if(isset($_POST['submit'])){
    $UserId = $_POST['UserId'];
    $BookId = $_POST['BookId'];
    $ReturnDate = $_POST['ReturnDate'];
    $Comment = $_POST['Comment'];



    $query= mysqli_query($conn,"INSERT INTO returnbook (UserId, BookId, ReturnDate, Comment) VALUES('$UserId', '$BookId', '$ReturnDate',  '$Comment')");
    if($query){
        header("location:returnbook.php");
    }else{
        echo "<script> alert('Data insertion failed')</script>";
    }
}
?>

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
    .container{
        margin-top: 20px;     
    }
  
    .two{
        padding-top: 10px;
        border:4px solid #f0e68c;
        border-radius: 15px ;
        width:30%;
        color:white;
       text-align: center;
       margin-left: -8%;
       
          
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
nav{
        margin-top: 5px;
        padding: 7px;
        margin-bottom: 5px;
    }
    table{
       max-width:82%;
       float: right;
       margin-top: -35%;
       margin-right: -8%;  
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
            
            <div class="two">
            <form method="POST" autocomplete="off">
                <label>User Id</label><br>
                <input type="text" name="UserId" placeholder=" Enter user's Id" required><br><br>
                <label>Book Id</label><br>
                <input type="number" name="BookId" placeholder=" Enter id of the book" required><br><br>
                <label>Return Date</label><br>
                <input type="date" name="ReturnDate"  placeholder="DD-MM-YYYY" required><br><br>
                <label>Comments</label><br>
                <input type="description" name="Comment" placeholder=" Enter comment if any"><br><br>
                
                <button type="submit" name="submit">Return Book</button>
            </form>
            </div>
       
        <table class="table table-bordered">
  <thead>
    <tr>
    
      <th class="table-secondary" scope="col">User Id</th>
      <th class="table-secondary" scope="col">Book Id</th>
      <th class="table-secondary" scope="col">Return Date</th>
      <th class="table-secondary" scope="col">Comment</th>
      <th class="table-secondary" scope="col">Operations</th>
      

 
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from returnbook";
    $result=mysqli_query($conn,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $UserId= $row['UserId'];
        $BookId=$row['BookId'];
        $ReturnDate= $row['ReturnDate'];
        $Comment= $row['Comment'];
       
        echo '<tr class="table-warning" >
        <td>'.$UserId.'</td>
        <td>'.$BookId.'</td>
        <td>'.$ReturnDate.'</td>
        <td>'.$Comment.'</td>
        <td>
        <button class="btn btn-primary"><a href="returnupdate.php? updateid='.$BookId.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="returndelete.php? deleteid='.$BookId.'" class="text-light" >Delete</a></button>
</td>
      </tr>';
    }
}

    ?>
   
  </tbody>
</table>

            </div>
    </body>
    </html>

            
            