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
      <th class="table-secondary" scope="col">Book Id</th>
      <th class="table-secondary" scope="col">Title</th>
      <th class="table-secondary" scope="col">Author</th>
      <th class="table-secondary" scope="col">Genre</th>
      <th class="table-secondary" scope="col">Publication</th>
      <th class="table-secondary" scope="col">Pages</th>
      <th class="table-secondary" scope="col">Quantity</th>
      <th class="table-secondary" scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from addbook";
    $result=mysqli_query($conn,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $bookId= $row['bookId'];
        $title=$row['title'];
        $author= $row['author'];
        $genre=$row['genre'];
        $publication= $row['publication'];
        $pages=$row['pages'];
        $quantity= $row['quantity'];
        echo '<tr class="table-warning">
        <th scope="row">'.$bookId.'</th>
        <td>'.$title.'</td>
        <td>'.$author.'</td>
        <td>'.$genre.'</td>
        <td>'.$publication.'</td>
        <td>'.$pages.'</td>
        <td>'.$quantity.'</td>
        <td>
        <button class="btn btn-primary"><a href="updatebook.php? updateid='.$bookId.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deletebook.php? deleteid='.$bookId.'" class="text-light" >Delete</a></button>
</td>
      </tr>';
    }
}

    ?>
   
  </tbody>
</table>
    </html>
