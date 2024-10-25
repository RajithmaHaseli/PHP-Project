<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employeer Login</title>
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
              background-image: url('img4.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
            </style>
</head>
<body>
        <br><br><br>
       
        <label for="position" ><label style="color:black;font-size:70px;">You Can See Your Time Schedule Here!!</label>
       
        <br><br><br><br><br><br>
        

    <form id="loginForm" onsubmit="validateForm(); return false;">
        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <br><br><br>
        <button type="submit">Login</button>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById('password').value;

            // Check if the password is correct
            if (password === 'employee@1234') {
                // Redirect to the next page
                window.location.href = 'view_employee.php';
            } else {
                // Display an error message
                alert('Incorrect password. Please try again.');
            }
        }
    </script>
    

</body>
</html>