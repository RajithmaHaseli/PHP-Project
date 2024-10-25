<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employeer Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<style>
body {
  background-image: url('admin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  opacity: 1;
}
h1{font-size: 50px;
color: #f2f2f2;}
h2{
  color: black;
  font-size: 60px;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 19px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: blue;
  color: white;
}

</style>

<body>
<a class="btn btn-primary" href="employee_admin_login.php" role="button">Admin Login </a><br>

<div class="topnav">
  <a class="active" href="home_page.php">Home</a>
  <a href="booking.php">Booking</a>
  <a href="employee_admin_login.php">Logout</a>
  <a href="About_us.html">About</a>
</div>


    <div class="container my-5">
        <h1 style="color:red;"><left><i>Therky Airline</i></left></h1>
        <h2><b><center>Employeer Schedule<center></b></h2><br>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Flight</th>
                    <th>Rank</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername="localhost";
                $username="root";
                $password="";
                $database="tutorial";

                //Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                //Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error); 
                }
                //read all row from database table
                $sql="SELECT * FROM employeers";
                $result=$connection->query($sql);

                if(!$result){
                   die("invalid query: " . $connection->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[flight]</td>
                        <td>$row[rank]</td>
                        <td>$row[created_at]</td>
                        <td>
                           
                    </tr>
                    ";
                }
            
                ?>
                
            </tbody>
        </table>
    </div>

</body>
</html>



