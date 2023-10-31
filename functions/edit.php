<?php
    //including the database connection file
    include_once("../dbconnection/mysql-connection.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        // checking empty fields
        if(empty($code) || empty($name)) {
            if(empty($name)) {
                echo "<front color='red'>Subject Name field is empty.</font><br/>";
            }
            if(empty($code)) {
                echo "<front color='red'>Subject Code field is empty.</font><br/>";
            }
        }
        else {
            // updating the table
            mysqli_query($dbc, "UPDATE tblsubjects SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_ID='$id'");
            // redirecting to the display page. In our case, it is index.php
            header("Location: ../index.php");
        }
    }
?>