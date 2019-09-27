/*<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:mkpaas.database.windows.net,1433; Database = NameSQL", "mkpaas", "{password1!}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "mkpaas@mkpaas", "pwd" => "{password1!}", "Database" => "NameSQL", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:mkpaas.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

//set variables
$first_name = sqlsrv_real_escape_string($conn, $_REQUEST['firstname']);
$last_name = sqlsrv_real_escape_string($conn, $_REQUEST['lastname']);

//insert query
$sql = "insert_into Name (name, lastname) VALUES
('$first_name', '$last_name')";

if(sqlsrv_query($conn, $sql){
    echo "Added Succesfullly.";
} else{
    echo "Error: Not able to execute $sql. " . mysqli_error($link);
}

//close the connection
sqlsrv_close($conn);
?>*/

<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:mkpaas.database.windows.net,1433; Database = NameSQL", "mkpaas", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "mkpaas@mkpaas", "pwd" => "{your_password_here}", "Database" => "NameSQL", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:mkpaas.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

//insert query   
//set variables
$query = "INSERT INTO Name VALUES (?, ?)";
$parameters = [$_POST["firstname"], $POST["lastname"]];

if(sqlsrv_query($conn, $query, $parameters){
    echo "Added Succesfullly.";
} else{
    echo "Error: Not able to execute $sql. " . mysqli_error($link);
}

//close the connection
sqlsrv_close($conn);
?>
