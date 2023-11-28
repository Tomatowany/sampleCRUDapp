<?php
    // including the database connection file
    include_once("dbconnection/mysql-connection.php");
    // including the fetch file
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a>
    <a href="forms/addsyllabusform.php">Add Syllabus</a><br/><br/>
    <table width='100%' border=1>
        <tr>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Syllabus ID</td>
            <td>Syllabus Code</td>
            <td>Syllabus Author</td>
            <td>Action</td>
        </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['Subject_ID']."</td>";
                echo "<td>".$row['Subject_Code']."</td>";
                echo "<td>".$row['Subject_Name']."</td>";
                echo "<td>". $row["syllabus_id"]."</td>";
                echo "<td>". $row["syllabus_code"]."</td>";
                echo "<td>". $row["syllabus_author"]."</td>";
                echo "<td><a href=\"forms/editform.php?id=$row[Subject_ID]\">Edit</a> |
                <a href=\"functions/delete.php?id=$row[Subject_ID]\"
                onClick=\"return confirm('Are you sure you want delete?')\">Delete</a></td>";
            }
        ?>
    </table>
</body>
</html>