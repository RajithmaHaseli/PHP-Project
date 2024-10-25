<!DOCTYPE html>

<style>
        {
            font-family: 'Bungee Spice', sans-serif;
            background-color: pink;
        }
        
        .container {
            padding: 50px;
            background-color: lightblue;
        }
        
        input[type=text],
        input[type=password],
        textarea {
            width: 25%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            
            
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: orange;
            outline: none;
        }
        .h1{
            font-family: 'Bungee Spice', sans-serif;
        }
       
        
        
       
        button {
        
        margin-top: 10px;
        margin-left: 40px;
        font-size: 30px;
        border-radius: 5px!important;
        font-weight: 1000;
        letter-spacing: 1px;
        cursor: pointer;
    }
    
    button:hover {
        color:green;
        border: 1px solid #339933;
        box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black;
    }


</style>

<?php

include("connect.php");
  
if(isset($_POST['submit'])) {
    $query = mysqli_query($conn,
    "INSERT INTO register_new SET  firstname='"
    . $_POST["firstname"] . "'    ,lastname ='"
    . $_POST["lastname"]  . "'    ,username ='"
    . $_POST["username"]  . "'    ,password ='"
	. $_POST["password"] . "'        ");
    ?>
<script>
	alert('You Registered Successfully, Login now');
</script>
<?php
}
?>
<html>

<head>
	<meta charset="utf-8">
   
	<title>Register Page</title>
	
</head>

<body>

	<a href="login.php"
		style="font-size:30px; float:right;">
       
		Login
	</a>
	<form method="post" action="signup.php" name="frm1">

	<div class="container">
    
            <center>
                <h1 > THERKY AIRLINE Registration Form</h1>
            </center>
            <hr>
            <p>
            <center>
               <label for="firstName:">First Name:</label>
               <input type="text"
						name="firstname"
						id="firstname" required>
                        </center>
            </p>
 
             
<p><center>
               <label for="lastName:">Last Name:</label>
               <input type="text"
							name="lastname"
							id="lastname" required>
                            </center>
            </p>
 
             
<p><center>
               <label for="username">Username:</label>
               <input type="text" name="username" id="username">
            </p>
            </center>
 
             

 
             
<p><center>
               <label for="password">Password:</label>
			   <input type="password"
						name="password" id="password" required>
                        </center>
               
            </p>
               
			
   

    <center> <button type="submit" name="submit" value="Login"> SUBMIT</button>
                
	</form>
</body>

</html>
