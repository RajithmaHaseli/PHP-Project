<?php
include "db_conn.php";

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if (!empty($id)) {
    if (isset($_POST["submit"])) {
        $flight_number = $_POST['flight_number'];
        $departure_place = $_POST['departure_place'];
        $departure_date = $_POST['departure_date'];
        $departure_time = $_POST['departure_time'];
        $arrival_place = $_POST['arrival_place'];
        $arrival_date = $_POST['arrival_date'];
        $arrival_time = $_POST['arrival_time'];

        $sql = "UPDATE `flight_scheduling` SET `flight_number`=?, `departure_place`=?, `departure_date`=?, `departure_time`=?, `arrival_place`=?, `arrival_date`=?, `arrival_time`=? WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssssi", $flight_number, $departure_place, $departure_date, $departure_time, $arrival_place, $arrival_date, $arrival_time, $id);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                header("Location: flight_schedule.php?msg=Data updated successfully");
                exit();
            } else {
                echo "Failed to execute query: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare statement: " . mysqli_error($conn);
        }
    }

    // Retrieve existing data for the form
    $sql = "SELECT * FROM `flight_scheduling` WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Failed to execute SELECT query: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare SELECT statement: " . mysqli_error($conn);
    }
} else {
    echo "";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  body{font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
    font-size:20px;
    margin-left: 100px;
    color:black;
    opacity: 3.9;
    
   background-image:url(edit_image.jpg);
   background-size: cover;
    
     }
 

   
 *{box-sizing:border-box;}

 .button1{
   padding:8px 16px; 
    background-color:red; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 15px;
    color: black;
    font-size:25px;
    margin-left: 200px;
  }
 
  a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 14px;
  color:white;
  border:0 none;
  border-radius: 15px;
  font-size: 25px;
  
}


    
 
.glow {
  font-size: 60px;
  color:red;
  text-align: left;
  animation: glow 1s ease-in-out infinite alternate;
}
   @keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px pink, 0 0 40px pink, 0 0 50px purple, 0 0 60px pink, 0 0 70px purple;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px blue, 0 0 40px gold, 0 0 50px gold, 0 0 60px gold, 0 0 70px blueviolet, 0 0 80px gold;
  }
}

 p{
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   color: black;
   font-size: 36px;
   text-align: left;
 }
 
 input[type=text], input[type=date], input[type=time]{
   width: 500px;
   padding: 12px;
   margin-top: 1px;
  
   border: 1px solid red;
   background: white;
   border-radius: 4px;
   text-align:center;
   color:blue;}

   label { 
			display: block; 
			margin-top: 10px;
      margin-left: 20px; 

		} 
     

    </style>
  
  
  
  <title>Edit Flight Details</title>
</head>

<body>
  
<div class="container">
    <div class="text">
        <h1 class="glow">Welcome To Therky Airline</h1>
         <p><b><i>Edit Flight Information</i></b></p>
         
      </div>
	

     

      

    <div class="container d-flex justify-content-center">
      <form action="" method="post" >
       
          <div class="col">
            <label class="form-label">Flight Number:<br></label>
            <input type="text" class="form-control" name="flight_number" value="<?php echo isset($row['flight_number']) ? $row['flight_number'] : ''; ?>">
          </div>

        

        <div class="col">
    <label class="form-label">Departure Place:<br></label>
    <input type="text" class="form-control" name="departure_place" value="<?php echo isset($row['departure_place']) ? $row['departure_place'] : ''; ?>">
</div>

<div class="mb-3">
    <label class="form-label">Departure Date:<br></label>
    <input type="date" class="form-control" name="departure_date" value="<?php echo isset($row['departure_date']) ? $row['departure_date'] : ''; ?>">
</div>

<div class="mb-4">
    <label class="form-label">Departure Time:<br></label>
    <input type="time" class="form-control" name="departure_time" value="<?php echo isset($row['departure_time']) ? $row['departure_time'] : ''; ?>">
</div>

<div class="mb-5">
    <label class="form-label">Arrival Place:<br></label>
    <input type="text" class="form-control" name="arrival_place" value="<?php echo isset($row['arrival_place']) ? $row['arrival_place'] : ''; ?>">
</div>

<div class="mb-6">
    <label class="form-label">Arrival Date:<br></label>
    <input type="date" class="form-control" name="arrival_date" value="<?php echo isset($row['arrival_date']) ? $row['arrival_date'] : ''; ?>">
</div>

<div class="mb-7">
    <label class="form-label">Arrival Time:<br></label>
    <input type="time" class="form-control" name="arrival_time" value="<?php echo isset($row['arrival_time']) ? $row['arrival_time'] : ''; ?>">
</div>

        

        <div>
        <a href="flight_schedule.php">
            <button type="submit" class="button button1" name="submit">Save</button>
            </a>
            
            <a href="flight_schedule.php">Cancel</a>
           
        </div>
      </form>
    </div>
  </div>

 
</body>

</html>