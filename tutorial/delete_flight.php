<?php
include "db_conn.php";

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if (!empty($id)) {
    $sql = "DELETE FROM `flight_scheduling` WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header("Location: flight_schedule.php?msg=Data deleted successfully");
            exit();
        } else {
            echo "Failed to execute query: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement: " . mysqli_error($conn);
    }
} else {
    echo "Error: ID is not set or empty.";
}
?>
