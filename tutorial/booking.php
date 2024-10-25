<!DOCTYPE html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: 'poppins', sans-serif;
    }
    
    .background {
        background-image: url('bg.jpg');
        background-size: cover;
        background-position: center;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .booking-form {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
        max-width: 500px;
        width: 80%;
        margin: 0 auto;
    }
    
    .booking-form h2 {
        text-align: center;
    }
    
    .booking-form form {
        display: flex;
        flex-direction: column;
    }
    
    .booking-form input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    .booking-form button {
        margin-top: 10px;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .booking-form button:hover {
        background-color: #45a049;
    }
</style>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background">
        <div class="booking-form">
            <h2>Travel Booking Form</h2>
            <form action="index.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="destination">Destination:</label>
                <input type="text" name="destination" id="destination" required>

                <label for="departure-date">Departure Date:</label>
                <input type="date" name="departure-date" id="departure-date" required>

                <label for="return-date">Return Date:</label>
                <input type="date" name="return-date" id="return-date" required>



                <button type="submit">Book Now</button>


            </form>
        </div>
    </div>
</body>

</html>