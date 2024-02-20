<html lang="en">
    <head>
        <link rel="stylesheet" href="nav.php">
        <title>Bookify</title>
        <style>
            .content{
              position:fixed;
                color:rgba(255, 255, 255, 0.8);
                text-shadow: 1px 1px 2px black;
                top:45%;
                right:1%;
                font-size:larger;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: bold; 
                width: 50%;   
                text-align: right;
            }
            .user{
                width:50%;
                float:left;
                display: flex;
                align-items: center;
                justify-content: flex-start;
               
                margin-top: 10%;
            }
            .user img{
              
                display: block;
                margin: 50px ;
            }
            .image-text{
                text-align: center;
                margin-top: 15px;
                color:black;
                text-shadow: 2px 2px 3px white;
                font-size: 30px;
                font-weight: bold;
                text-decoration: none;
               
            }
            .image-text p:hover{
                background-color:azure;
               
                transition: all 0.3s ease;
            }
            .image-text a{
                color: black;
            }
            
            
        </style>
    </head>
    <body> 
        <nav class="upper">
            <ul class="add">
               <div id="t">
                <li class="e">bookify Library Management System</li>
                </div>
                <li class="e"><img src="images/phone.png">+977 9847872378</li>
                <li class="e"><img src="images/mail.png">bookify@gmail.com</li>
            </ul>
        </nav>
            <nav>
              <ul>
                <div id="w">
                    <li><img src="images/logo.png" alt="Bookify Logo" width="60px" height="60px"></li>        
                <li>bookify</li>
                </div>
                <li><a href="front.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    
                    <li><a href="register.php">Register</a></li>
                    
                </ul>
            </nav>
            
            <div class="content">
            <h1>Welcome to bookify!</h1>
            <h2>where every login opens a gateaway <br>to a world
                 of imagination and knowledge.</h2>
            </div>  
            <div class="user">
                <div class="image-text">
                <img src="images/admin.png" width="150px" height="100px">
                <p><a href="admin.php">Admin</a></p>
                </div>
                <div class="image-text">
                <img src="images/user.png" width="200px" height="100px">
                <p><a href="user.php">User</a></p>
                </div>
            </div>
            
    </body>
</html>

