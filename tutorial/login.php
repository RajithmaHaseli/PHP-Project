<!DOCTYPE html>
<?php
	
include("connect.php");

if(isset($_POST['login'])) {
	$sql = mysqli_query($conn,
	"SELECT * FROM register_new WHERE username='"
	. $_POST["username"] . "' AND
	password='" . $_POST["pwd"] . "' ");

	$num = mysqli_num_rows($sql);

	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:home_page.php");
		exit();
	}
	else {
?>
<hr>
<font color="red"><b>
		<h3>Sorry Invalid Username and Password<br>
			Please Enter Correct Credentials</br></h3>
	</b>
</font>
<hr>

<?php
	}
}
?>
<html>

<head>
	<style>
		
        * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        display: flex;
        height: 100vh;
        text-align: center;
        align-items: center;
        justify-content: center;
        background: #151515;
    }
    
    .login-form {
        position: relative;
        width: 370px;
        height: auto;
        background: #1b1b1b;
        padding: 40px 35px 60px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: inset 0 0 1px #272727;
    }
    
    .text {
        font-size: 30px;
        color: #c7c7c7;
        font-weight: 600;
        letter-spacing: 2px;
    }
    
    form {
        margin-top: 40px;
    }
    
    form .field {
        margin-top: 20px;
        display: flex;
    }
    
    .field .fas {
        height: 50px;
        width: 60px;
        color: #868686;
        font-size: 20px;
        line-height: 50px;
        border: 1px solid #444;
        border-right: none;
        border-radius: 5px 0 0 5px;
        background: linear-gradient(#333, #222);
    }
    
    .field input,
    form button {
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 19px;
        color: #868686;
        padding: 0 15px;
        border-radius: 0 5px 5px 0;
        border: 1px solid #444;
        caret-color: #d70b0b;
        background: linear-gradient(#333, #222);
    }
    
    input:focus {
        color: #e0ddea;
        box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 255, 0, .1);
        background: linear-gradient(#333933, #222922);
        animation: glow .8s ease-out infinite alternate;
    }
    
    @keyframes glow {
        0% {
            border-color: #2e06b3;
            box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 0, 0, .1);
        }
        100% {
            border-color: #6f6;
            box-shadow: 0 0 20px rgba(0, 255, 0, .6), inset 0 0 10px rgba(0, 255, 0, .4);
        }
    }
    
    button {
        margin-top: 30px;
        border-radius: 5px!important;
        font-weight: 600;
        letter-spacing: 1px;
        cursor: pointer;
    }
    
    button:hover {
        color: #339933;
        border: 1px solid #339933;
        box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black;
    }
    
    .link {
        margin-top: 25px;
        color: #868686;
    }
    
    .link a {
        color: #339933;
        text-decoration: none;
    }
    
    .link a:hover {
        text-decoration: underline;
    }
    
    @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        display: flex;
        height: 100vh;
        text-align: center;
        align-items: center;
        justify-content: center;
        background: #151515;
    }
    
    .login-form {
        position: relative;
        width: 370px;
        height: auto;
        background: #1b1b1b;
        padding: 40px 35px 60px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: inset 0 0 1px #272727;
    }
    
    .text {
        font-size: 30px;
        color: #c7c7c7;
        font-weight: 600;
        letter-spacing: 2px;
    }
    
    form {
        margin-top: 40px;
    }
    
    form .field {
        margin-top: 20px;
        display: flex;
    }
    
    .field .fas {
        height: 50px;
        width: 60px;
        color: #868686;
        font-size: 20px;
        line-height: 50px;
        border: 1px solid #444;
        border-right: none;
        border-radius: 5px 0 0 5px;
        background: linear-gradient(#333, #222);
    }
    
    .field input,
    form button {
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 19px;
        color: #868686;
        padding: 0 15px;
        border-radius: 0 5px 5px 0;
        border: 1px solid #444;
        caret-color: #d70b0b;
        background: linear-gradient(#333, #222);
    }
    
    input:focus {
        color: #e0ddea;
        box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 255, 0, .1);
        background: linear-gradient(#333933, #222922);
        animation: glow .8s ease-out infinite alternate;
    }
    
    @keyframes glow {
        0% {
            border-color: #2e06b3;
            box-shadow: 0 0 5px rgba(0, 255, 0, .2), inset 0 0 5px rgba(0, 0, 0, .1);
        }
        100% {
            border-color: #6f6;
            box-shadow: 0 0 20px rgba(0, 255, 0, .6), inset 0 0 10px rgba(0, 255, 0, .4);
        }
    }
    
    button {
        margin-top: 30px;
        border-radius: 5px!important;
        font-weight: 600;
        letter-spacing: 1px;
        cursor: pointer;
    }
    
    button:hover {
        color: #339933;
        border: 1px solid #339933;
        box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black;
    }
    
    .link {
        margin-top: 25px;
        color: #868686;
    }
    
    .link a {
        color: #339933;
        text-decoration: none;
    }
    
    .link a:hover {
        text-decoration: underline;
    }
</style>
<html lang="en" dir="ltr">	
<head>
    <meta charset="utf-8">
    <title>Glowing Inputs Login Form UI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>


<body>
<div class="login-form">
        <div class="text">
            LOGIN
	</div>
	<form method="post" action="login.php" name="f1" action="authentication.php" onsubmit="return validation()" >
		
	<div class="field">
                <div class="fas fa-envelope"></div>
                <input type="text" id="username" name="username" placeholder="Username">
            </div>
			<div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" id="pwd" name="pwd" placeholder="Password">
            </div>

			<button type="submit" name="login" value="Login"> LOGIN</button>
            <div class="link">	
			Not a member?
                <a href="signup.php">Signup now</a>
            </div>
			</table>
		</fieldset>
	</form>
</body>

</html>
