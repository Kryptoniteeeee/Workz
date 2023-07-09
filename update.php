<?php
include('dbcon.php');
$get_id = $_GET['id'];
$status = $_GET['status'];

if ($status === 'Pending') {
    mysqli_query($conn, "UPDATE schedule SET status = 'Pending' WHERE id = '$get_id'") or die(mysqli_error($conn));
} elseif ($status === 'Confirm') {
    mysqli_query($conn, "UPDATE schedule SET status = 'Confirm' WHERE id = '$get_id'") or die(mysqli_error($conn));
} elseif ($status === 'Done') {
    mysqli_query($conn, "UPDATE schedule SET status = 'Done' WHERE id = '$get_id'") or die(mysqli_error($conn));
}

header('location: schedule.php');
exit;
?>
