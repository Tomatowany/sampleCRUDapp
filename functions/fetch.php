<?php
    // fetching data
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.Subject_ID = tblsubjects.Subject_ID";
    // using mysqli_query
    $result = mysqli_query($dbc, $query); 
?>