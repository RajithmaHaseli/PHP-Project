<!DOCTYPE html>
<html lang="en">




<style>
     :root {
        --color-primary: #001eff;
        --color-white: #e9e9e9;
        --color-black: #010628;
        --color-black-1: #212b38;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: sans-serif;
        
    }
    
    .logo {
        color: var(--color-white);
        font-size: 30px;
    }
    
    .logo span {
        color: var(--color-primary);
    }
    
    .menu-bar {
        background-color: var(--color-black);
        height: 80px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2%;
        position: relative;
    }
    
    .menu-bar ul {
        list-style: none;
        display: flex;
    }
    
    .menu-bar ul li {
        /* width: 120px; */
        padding: 10px 30px;
        /* text-align: center; */
        position: relative;
    }
    
    .menu-bar ul li a {
        font-size: 20px;
        color: var(--color-white);
        text-decoration: none;
        transition: all 0.3s;
    }
    
    .menu-bar ul li a:hover {
        color: var(--color-primary);
    }
    
    .fas {
        float: right;
        margin-left: 10px;
        padding-top: 3px;
    }
    /* dropdown menu style */
    
    .dropdown-menu {
        display: none;
    }
    
    .menu-bar ul li:hover .dropdown-menu {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: var(--color-black);
    }
    
    .menu-bar ul li:hover .dropdown-menu ul {
        display: block;
        margin: 10px;
    }
    
    .menu-bar ul li:hover .dropdown-menu ul li {
        width: 150px;
        padding: 10px;
    }
    
    
    .intro {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 700px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url();
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color:white;
    }
    
    .Section_top {
        height: calc(150vh - 80px);
        background-image: url(image.jpg);
        background-position: center;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        justify-content: center;
        animation: change 50s infinite ease-in-out;
    }
    
    .content a:hover {
        background: #2905dc;
        color: #fff;
    }
    
    
    @keyframes change {
        0% {
            background-image: url(img1.jpg);
        }
        10% {
            background-image: url(img2.jpg);
        }
        20% {
            background-image: url(image.jpg);
        }
        30% {
            background-image: url(img3.jpg);
        }
        40% {
            background-image: url(img4.jpg);
        }
        50% {
            background-image: url(img5.jpg);
        }
        60% {
            background-image: url(image.jpg);
        }
        70% {
            background-image: url(img6.jpg);
        }
        80% {
            background-image: url(img7.jpg);
        }
        90% {
            background-image: url(img8.jpg);
        }
        100% {
            background-image: url(img5.jpg);
        }
    }
    
    .intro h1 {
        font-family: 'Nobile', sans-serif;
        font-size: 60px;
        color: #ffffffe3;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0px 0;
        text-shadow: 0px 0px 20px rgb(0, 0, 0);
    }
    
    .intro h2 {
        font-family: 'Nobile', sans-serif;
        padding: 0em 1em;
        font-size: 60px;
        color: #ffffffe3;
        font-weight: bold;
        text-transform: uppercase;
        margin: 10px 0;
    }
    
    .intro h4 {
        font-family: 'Contrail One', sans-serif;
        font-size: 20px;
        color: #e5d8f5e8;
        text-transform: uppercase;
        margin: 10px 0;
        text-shadow: 0px 0px 20px rgb(0, 0, 0);
    }
    
    .caret {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 6px solid #fff;
        transition: 0.3s;
    }
    
    .caret-rotate {
        transform: rotate(180deg);
    }
    
    .menu {
        list-style: none;
        padding: 0.2em 0.5em;
        background: #323741;
        border: 1px #363a43 solid;
        box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.2);
        border-radius: 0.5em;
        color: #9fa5b5;
        position: absolute;
        top: 3em;
        left: 50%;
        width: 100%;
        transform: translateX(-50%);
        opacity: 0;
        display: none;
        transition: 0.2s;
        z-index: 1;
    }
    
    .menu li {
        padding: 0.7em 0.5em;
        margin: 0.3em 0;
        border-radius: 0.5em;
        cursor: pointer;
    }
    
    .menu li:hover {
        background: #2a2d35;
    }
    
    .active {
        background: #23242a;
    }
    
    .menu-open {
        display: none;
        opacity: 1;
    }
    /*text animation part*/
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
   
    
    .container {
        width: 500px;
        overflow: hidden;
    }
    
    .container .text {
        position: relative;
        color: #ffffff;
        font-size: 30px;
        font-weight: 600;
    }
    
    .container .text.first-text {
        color: #FFF;
    }
    
    .text.sec-text:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 200%;
        background-color: #010628;
        border-left: 2px solid #f7f7f7;
        animation: animate 3s steps(12) infinite;
    }
    
   .custom-select {
        min-width: 150px;
        position: relative;
    }
    
    .about-us {
        font-family: 'Nobile', sans-serif;
        font-size: 20px;
        color: #fffffffb;
        font-weight: bold;
        margin: 20px 0;
    }

    .intro button {
    align-items: center;
    margin: 20px 0;
    background-color: #010628;
    color: #f5f3f3;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    font-size: 25px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0px 0px 20px rgb(233, 233, 235)
}

.footer {
   position: fixed;
   font-size: 15px;
   height: 25px;
   background-color: var(--color-white);
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
   padding: 5px 0px 5px 0px;
}
    
    
   
    
   
    
    
</style>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Therky Airline</title>
</head>

<body>
    <div class="menu-bar">
        <h1 class="logo">THERKY<span>AIRLINE</span></h1>
        <ul>
            
            <li><a href="view_flight.php">Flight Info</a></li>
            <li><a href="About_us.html">About Us</a></li>

            <li><a href="login.php">Log Out</a></li>

            <li><a href="">Pages <i class="fas fa-caret-down"></i></a>

                <div class="dropdown-menu">
                    <ul>
                        <li><a href="employee_admin_login.php">Employeer Management</a></li>
                        <li><a href="admin_login.php">Flight Scheduling</a></li>
                        <li><a href="rating.php">Reviews</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>




    <div class="intro">


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Background Change Automatic - Sagar Developer</title>
        <link rel="stylesheet" href="style.css">
        <div class="Section_top">
            <div class="content">

                <h1>
                    <center>
                        <br>
                        <i>Elevate your travel experience-Explore, book, and soar to new horizons with our user- friendly System.</i>
                </h1>

                <h4>
                    <center>You can easily booking air tickets in our website</center>
                </h4>

                <center><button class="GFG" 
    onclick="window.location.href = 'booking.php';"> 
        Booking Tickets
    </button>

                <center><div class="footer">
  <p>© Copyright 2024<span id="demo"></span> <span class="brand">THERKY AIRLINE. </span> All Rights Reserved...
</footer></p>
</div>
               

                                      
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html> 
