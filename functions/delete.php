<?php
    // including the database connection file
    include_once("../dbconnection/mysql-connection.php");
    // getting id of the data from url
    $id = $_GET['id'];
    // deleting the row from table
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID='$id'");
    // redirecting to the display page (index.php in our case)
    header("Location:../index.php");
?>