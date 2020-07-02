<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$_GET['id']}";
    $result = mysqli_query($conn, $sql) or die("Query Unsccessful.");
    header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>