<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tutorial";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$flight = "";
$rank = "";

$errorMassage = "";
$successMassage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the employee

    if (!isset($_GET["id"])) {
        header("location:employeer_management.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM employeers WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:employeer_management.php");
        exit;
    }

    $name = $row["name"];
    $flight = $row["flight"];
    $rank = $row["rank"];
} else {
    // POST method: update the data of the employee

    $id = $_POST["id"];
    $name = $_POST["name"];
    $flight = $_POST["flight"];
    $rank = $_POST["rank"];

    do {
        if (empty($id) || empty($name) || empty($flight) || empty($rank)) {
            $errorMassage = "All the fields are required";
            break;
        }

        $sql = "UPDATE employeers " .
            "SET name ='$name' , flight='$flight', rank='$rank' " .
            "WHERE id =$id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMassage = "Invalid query: " . $connection->error;
            break;
        }
        $successMassage = "Updated correctly";

        header("location:employeer_management.php");
        exit;

    } while (true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <style>
        body {
            background-image: url('index.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <div class="container my-5">
        <h1 style="color:brown;"><B><center><I>THERKY AIRLINE</I></B></center></h1>
        <h2><b>Edit Employeer</b></h2>

        <?php
        if (!empty($errorMassage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMassage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }
        ?>
             
        
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class='row mb-3'>
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class='row mb-3'>
                <label class="col-sm-3 col-form-label">Flight</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="flight" value="<?php echo $flight; ?>">
                </div>
            </div>
            <div class='row mb-3'>
                <label class="col-sm-3 col-form-label">Rank</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="rank" value="<?php echo $rank; ?>">
                </div>
            </div>
            <?php
            if (!empty($successMassage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMassage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
            <br><br>
            <div class="row mb-3">
                <div class="offset-sm-3 d-grid">
                    <center><button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>