<?php

include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  



  <style>
  body{background-image: url(img4.jpg);
    background-size:cover;}

    

  table, td, th {
  border: 1px solid;}

  table{
      border-collapse: collapse;
      width:100%;
    }

  th {
    text-align: left;
    padding: 10px;
    font-size: 20px;
    color:blue;
    background-color: lavender;
    font-style: italic;
  }

  td{text-align: left;
    padding: 10px;
    font-size: 20px;
    color:black;
    font-weight: bolder;
    background-color: lavender;
  }



  body {
  margin: 10;
  font-family:sofia;
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



.glow {
  font-size: 90px;
  color: blue;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

  
@keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px pink, 0 0 40px pink, 0 0 50px purple, 0 0 60px pink, 0 0 70px purple;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px gold, 0 0 40px blue, 0 0 50px gold, 0 0 60px gold, 0 0 70px gold, 0 0 80px gold;
  }

}


</style>
    
  <title>View Flights</title>
</head>

<body>
  

  <div class="topnav">
  <a class="active" href="home_page.php">Home</a>
  <a href="booking.php">Booking</a>
 
  <a href="About_us.html">About</a>
</div>


<h1 class="glow">Flight Schedule</h1><br><br><br>

  
    
 
 

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Aircraft Type</th>
          <th scope="col">Departure Place</th>
          <th scope="col">Departure Date</th>
          <th scope="col">Departure Time</th>
          <th scope="col">Arrival Place</th>
          <th scope="col">Arrival Date</th>
          <th scope="col">Arrival Time</th>
          <th scope="col">Remarks</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `flight_scheduling`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["flight_number"] ?></td>
            <td><?php echo $row["departure_place"] ?></td>
            <td><?php echo $row["departure_date"] ?></td>
            <td><?php echo $row["departure_time"] ?></td>
            <td><?php echo $row["arrival_place"] ?></td>
            <td><?php echo $row["arrival_date"] ?></td>
            <td><?php echo $row["arrival_time"] ?></td>
            <td>
           
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

 
</body>

</html>