<?php
include('connection.php');
$bookId = $_GET['updateid'];
$sql="Select * from addbook where bookId=$bookId";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$bookId = $row["bookId"];
$title= $row["title"];
$author= $row["author"];
$genre= $row["genre"];
$publication= $row["publication"];
$pages= $row["pages"];
$quantity=$row["quantity"];

if(isset($_POST['submit'])){
    $bookId = $_POST['bookId'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publication = $_POST['publication'];
    $pages = $_POST['pages'];
    $quantity = $_POST['quantity'];


    $query= mysqli_query($conn,"UPDATE Addbook SET bookId='$bookId', title='$title', author='$author', genre='$genre', publication='$publication', pages='$pages', quantity='$quantity'
    where bookId=$bookId");
    if($query){
       
       header('location:viewbooks.php');
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
              <li><a href="viewbooks.php">Go Back </a></li> 
            </ul>
            </nav>
            <div class="container">
            
            <div class="two">

            <form method="POST" autocomplete="off">
                <label>Book Id</label><br>
                <input type="number" name="bookId" placeholder=" Enter Id of the book" value="<?php echo $bookId;?>"><br><br>
                <label>Title</label><br>
                <input type="text" name="title" placeholder=" Enter title of the book" value="<?php echo $title;?>" ><br><br>
                <label>Author</label><br>
                <input type="text" name="author" placeholder=" Enter author of the book" value="<?php echo $author;?>"><br><br>
                <label>Genre</label><br>
                <input type="text" name="genre" placeholder=" Enter genre of the book" value="<?php echo $genre;?>"><br><br>
                <label>Publication</label><br>
                <input type="text" name="publication" placeholder=" Enter publication of the book" value="<?php echo $publication;?>"><br><br>
                <label>Pages</label><br>
                <input type="number" name="pages" placeholder=" Enter num of pages of the book" value="<?php echo $pages;?>"><br><br>
                <label>Quantity</label><br>
                <input type="number" name="quantity" placeholder=" Enter num of copies of the book"value="<?php echo $quantity;?>"><br><br>
               <button type="submit" name="submit" >Update Book</button>
               
                </form>
            </div>
        </div>
