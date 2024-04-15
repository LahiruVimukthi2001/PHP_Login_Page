<?php include('server.php');?>
<html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="" rel="stylesheet" type="text/css">
    </head>
    <style>

    </style>
    </head>
    <body>
        <div class="login"> 
        <form method="post" action="Server.php" id="login" onsubmit="return validated()">  
        <img src="login.png" id="img"> 
        <h2>Login Page</h2>
        <br>

        <label><b>User Name</b></label>    
        <input type="text" name="username" id="Uname" placeholder="Enter Username">    
        <br><br>   

        <label><b>Password</b></label>    
        <input type="Password" name="password" id="Pass" placeholder="Enter Password">    
        <br><br>

        <input type="checkbox" id="check" name="check"><span>Remember me</span> 

        <p>Incorrect username or Password, if you don't remember your password or usename. <a href="url">Forget Password?</a> </p>
        <br>
        
        </div>
    </body>
</html>