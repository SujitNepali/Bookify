<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Store</title>
        <link rel="stylesheet" href="static/css/custom.css">
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
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            <h2>Welcome User!</h2>
            <form>
        <div class="one">
        <label>Enter your username</label>
        <input type="text" id="uname"><br><br>
        <label>Enter your password</label>
        <input type="text" id="pass"><br><br>
        <button onclick="login()">Sign In</button><br><br>
        <label>Not a user yet?</label><br>
       <a href="register.html">Register Now</a>
        </div>
            </form>
        <script type="text/javascript">
            function login(){
                var user=document.getElementById('uname').value;
                var pass=document.getElementById('pass').value;
                if(user===""||pass===""){
                    alert("Enter username and password");
                }
                else if(user==="bookify123"&&pass==="B@@kify"){
                    document.write("Login Succesfull!");
                }
                else{
                alert("Incorrect username or password");
                }
            }
        </script>
    </body>
</html>