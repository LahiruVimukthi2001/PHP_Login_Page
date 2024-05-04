<?php include('server.php');?>
<html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="" rel="stylesheet" type="text/css">

        <style>
          body{margin: 0;  
               padding: 0;  
               background-color:light blue;  
               font-family: 'Arial';   }  
        
            .login{width: 310px;  
                   overflow: hidden;  
                   margin: auto;  
                   margin-top: 30px;
                   margin: 20 0 0 450px;  
                   padding: 60px;  
                   background:rgb(5, 248, 204);  
                   border-radius: 30px ;  }  
              
            h2{text-align: center;  
               color: #2200ff;  
               padding: 00px;  }
  
           label{color: #090a0a;  
                 font-size: 18px;  }

            #Uname{width: 300px;  
                   height: 30px;  
                   border: none;  
                   border-radius: 3px;  
                   padding-left: 8px;  } 

            #Pass{width: 300px;  
                  height: 30px;  
                  border: none;  
                  border-radius: 3px;  
                  padding-left: 8px;  }

            #log{width: 100px;  
                 height: 30px; 
                 margin-left: 55px;
                 border:none;  
                 border-radius: 8px;  
                 padding-left: 7px; 
                 background-color: rgb(21, 188, 244);
                 color: blue; }

            #res{width: 100px;  
                 height: 30px;  
                 border: none;  
                 border-radius: 8px;  
                 padding-left: 7px;  
                 background-color: rgb(21, 188, 244);
                 color: blue; }

            span{color: white;  
                 font-size: 17px; } 

            p{color: #d81818; 
              width: 310px;   
              overflow: hidden;  
              font-size: 12px;   }

   
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
        
        <input type="submit" name="log" id="log" placeholder="Log In Here">  &nbsp
        <input type="reset" name="res" id="res" value="Cancel">

        <h4>Sign Up Using</h4>       

        </form>
        </div>
        <script src="Login.js"></script>

    </body>
</html>