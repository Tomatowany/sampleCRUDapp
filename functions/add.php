<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA</title>
</head>
<body>
    <?php
        include_once("../dbconnection/mysql-connection.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name =$_POST['name'];
            // checking empty fields

            if(empty ($code) || empty($name)) {
                if(empty($name)) {
                    echo "front color='red'>Subject Name field is empty.</font><br/>";
                }
                if(empty($code)) {
                    echo "front color='red'>Subject Code field is empty.</font><br/>";
                }
                //link to previous page
                echo "<br/><a href='javasacript:self.history.back();'>Go Back</a>";
            }else{
                 // if all the fields are filled (not empty)
                    // insert data to database
                $result = mysqli_query($dbc, "INSERT INTO tblsubjects(Subject_Code, Subject_Name) VALUES('$code','$name')");
                //display message success
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>