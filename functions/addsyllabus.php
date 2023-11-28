<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SYLLABUS DATA</title>
</head>
<body>
    <?php
        // including the database connection file
            include_once("../dbconnection/mysql-connection.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $author =$_POST['author'];
            $subject_no =$_POST['subject_no'];
            // checking empty fields
            if(empty($code) || empty($author)) {
                if(empty($code)) {
                    echo "<front color='red'>Syllabus Code field is empty.</font><br/>";
                }
                if(empty($author)) {
                    echo "<front color='red'>Syllabus Author field is empty.</font><br/>";
                }
                // link to the previous page
                echo "<br/><a href='javasacript:self.history.back();'>Go Back</a>";
            }
            else{
                // if all the fields are filled (not empty)
                // insert data to database
                $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author, Subject_ID) VALUES('$code','$author','$subject_no')");
                // display success message
                echo "<font color='green'>Data added successfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>