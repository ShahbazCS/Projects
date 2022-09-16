<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Tushar@491');
define('DB_NAME', 'login');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$gn=$_REQUEST['grpno'];
$pn=$_REQUEST['project-name'];
$ln=$_REQUEST['leader-name'];
$lr=$_REQUEST['leader-roll'];
$li=$_REQUEST['email'];
$s1n=$_REQUEST['student1-name'];
$s1r=$_REQUEST['student1-roll'];
$s1i=$_REQUEST['email1'];
$s2n=$_REQUEST['student2-name'];
$s2r=$_REQUEST['student2-roll'];
$s2i=$_REQUEST['email2'];
$s3n=$_REQUEST['student3-name'];
$s3r=$_REQUEST['student3-roll'];
$s3i=$_REQUEST['email3'];
$s4n=$_REQUEST['student4-name'];
$s4r=$_REQUEST['student4-roll'];
$s4i=$_REQUEST['email4'];
$sql="insert into students values('$gn','$pn','$ln','$lr','$li','$s1n','$s1r','$s1i','$s2n','$s2r','$s2i','$s3n','$s3r','$s3i','$s4n','$s4r','$s4i')";
if(mysqli_query($link,$sql)){
    echo "<h2>Students data store successfully!!</h2>";
}
else{
    echo "error";
}

?>
        
    
</body>
</html>