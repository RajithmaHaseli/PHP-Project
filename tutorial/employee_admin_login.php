<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
     <style>
            body {
              background-image: url('employee.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
            </style>
</head>
<body>



       
       <label for="position" ><label style="color:white;font-size:70px;">Admin Login</label>
      

      
       <br><br><br><br>
        

    <form id="loginForm" onsubmit="validateForm(); return false;">
        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <br><br><br>
        <button type="submit"> Admin Login</button>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById('password').value;

            // Check if the password is correct
            if (password === 'admin@1234') {
                // Redirect to the next page
                window.location.href = 'employeer_management.php';
            } else {
                // Display an error message
                alert('Incorrect password. Please try again.');
            }
        }
    </script>
    <br>
<h1 style="color:brown;"><center><b><i>Therky Airline</i></b></center></h1>
<a class="btn btn-primary" href="employee_login.php" role="button">Other Login</a><br><br>
<a class="btn btn-primary" href="home_page.php" role="button">Go to Home</a><br>
</body>
</html>