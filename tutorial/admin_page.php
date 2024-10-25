<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Admin Login Form</title>

    <style>

body {
    font-family: Arial, sans-serif;
    
    justify-content: center;
    align-items: center;
    height: 80vh;
   padding: 40px;
    font-size: 24px;
    background-image: url('admin.jpg');
    background-size: cover;
    opacity: 0.9;
    
}
h2{color: blue;
text-align: center;}

.login-container {
    background-color: lavender;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
    width: 40%;
   

}

form {
    display: flex;
    flex-direction: column;
    
}

label {
    margin-bottom: 0px;

}

input {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color:green;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: red;
}

.error {
    color: red;
    margin-bottom: 10px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #f1f1f1;
  font-size: 20px;
}

li a {
  display: block;
  color: #000;
  padding: 8px 12px;
  text-decoration: none;
}

li a.active {
  background-color: lightskyblue;
  color: red;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

        </style>
</head>
<body>
<ul>
  <li><a class="active" href="home_page.php">Home</a></li>
  <li><a href="view_flight.php">View Flight Scheduling</a></li>
 
</ul>



    <div class="login-container">
        <form action="admin_login.php" method="post">
            <h2>Admin Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter your username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>


   

</body>
</html>
