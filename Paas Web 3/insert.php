<?php

//connect to mysqli
$link = mysqli_connect("localhost", "root", "", "demo");

//check connection
if($link===false){
    die("error:Could not connect.". mysqli_connect_error());
}

//set variables
$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);

//insert query
$sql = "insert_into persons (first_name, last_name) VALUES
('$first_name', 'last_name')";

if(mysqli_query($link, $sql)){
    echo "Added Succesfullly.";
} else{
    echo "Error: Not able to execute $sql. " . mysqli_error($link);
}

//close the connection
mysqli_close($link);
?>