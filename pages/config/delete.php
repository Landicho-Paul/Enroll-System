<?php

session_start();
include "dbcon.php";
$delete = $_POST['delete'];
$link = $_POST['image'];

echo $link;
$sql = "DELETE FROM $delete WHERE img= '$link'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    THE CARD IS DELETED.</div>';
    unlink($link);
    header("Location: ../dashboardcontent/ManageElem.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>