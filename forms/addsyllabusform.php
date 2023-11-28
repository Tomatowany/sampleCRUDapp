<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SYLLABUS DATA</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../functions/index.php">Home</a>
    <br><br>
    <form action="../functions/addsyllabus.php" method="POST" name="form1" >
        <table width="25%" >
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject_no" >
                        <?php
                            include_once("../dbconnection/mysql-connection.php");
                            $query = "SELECT * FROM tblsubjects";
                            $result = mysqli_query($dbc, $query);
                            while ($row = mysqli_fetch_array($result)){
                                echo "<option value=\"".$row['Subject_ID']."\">";
                                echo $row['Subject_Name'];
                                echo "</option>";
                            }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" ></td>
            </tr>
        </table>
    </form>
</body>
</html>
