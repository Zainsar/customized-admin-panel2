<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "UPDATE `Category` SET Cstatus = '1' where id = $user_id";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:viewcat.php');
?>