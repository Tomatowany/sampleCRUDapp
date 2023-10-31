<?php
    // including the database connection file
    include_once("../dbconnection/mysql-connection.php");
    // getting id of the data from url
    $id = $_GET['id'];
    // selecting data associated with this particular id
    $result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE Subject_Id=$id");
    while($row = mysqli_fetch_array($result)) {
        $code = $row['Subject_Code'];
        $name = $row['Subject_Name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
</head>
<body>
    <h1>Edit Subject</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/edit.php" method="post" name="form1">
        <table border="0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code" value="<?php echo $code;?>"></td>
            </tr>
            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>