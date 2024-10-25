<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $flight_number = $_POST['flight_number'];
   $departure_place = $_POST['departure_place'];
   $departure_date = $_POST['departure_date'];
   $departure_time = $_POST['departure_time'];
   $arrival_place = $_POST['arrival_place'];
   $arrival_date = $_POST['arrival_date'];
   $arrival_time = $_POST['arrival_time'];

   $sql = "INSERT INTO `flight_scheduling`(`id`, `flight_number`, `departure_place`, `departure_date`, `departure_time`,`arrival_place`,`arrival_date`,`arrival_time`) VALUES (NULL,'$flight_number','$depature_place','$depature_date','$depature_time','$arrival_place','$arrival_date','$arrival_time')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: flight_schedule.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
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
    
    font-size:22px;
    margin-left: 190px;
    color:black;
    
    
    
   background-image:url(add_flight_picture.png);
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
    margin-left: 150px;
  }
 
  a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 14px;
  color:black;
  border:0 none;
  border-radius: 15px;
  font-size: 25px;
  
}


    
 
.glow {
  font-size: 60px;
  color:purple;
  text-align: left;
  animation: glow 1s ease-in-out infinite alternate;
}
   @keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px pink, 0 0 40px pink, 0 0 50px purple, 0 0 60px pink, 0 0 70px purple;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px blue, 0 0 40px gold, 0 0 50px gold, 0 0 60px gold, 0 0 70px gold, 0 0 80px gold;
  }
}

 p{
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   color: blue;
   font-size: 36px;
   text-align: left;
 }
 
 input[type=text], input[type=date], input[type=time]{
   width: 500px;
   padding: 12px;
   margin-top: 1px;
  
   border: 1px solid blue;
   background: white;
   border-radius: 4px;
   text-align:center;
   color:blue;}

   label { 
			display: block; 
			margin-top: 8px;
      margin-left: 50px; 

		} 
   
     
   </style>
 
 
 
  
<title>Flights Scheduling</title>
</head>

<body>
   

   <div class="container">
	
      <div class="text">
         <h1 class="glow">Welcome To Therky Airline</h1>
         <p><b><i>Add New Flight Details</i></b></p>
      
      </div>
	

      <div class="container d-flex justify-content-center">
         <form action="" method="post" >
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Flight Number:<br></label>
                  <input type="text" class="form-control" name="flight_number" placeholder="F001">
               </div>

               <div class="col">
                  <label class="form-label">Departure Place:<br></label>
                  <input type="text" class="form-control" name="departure_place" placeholder="Colombo">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Departure Date:<br></label>
               <input type="date" class="form-control" name="departure_date">
            </div>

            <div class="mb-4">
                <label class="form-label">Departure Time:<br></label>
                <input type="time" class="form-control" name="departure_time">
            </div>

            <div class="mb-5">
                <label class="form-label">Arrival Place:<br></label>
                <input type="text" class="form-control" name="arrival_place">
            </div>

            <div class="mb-6">
                <label class="form-label">Arrival Date:<br></label>
                <input type="date" class="form-control" name="arrival_date">
            </div>

            <div class="mb-7">
                <label class="form-label">Arrival Time:<br></label>
                <input type="time" class="form-control" name="arrival_time">
            </div>
            <br>

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



