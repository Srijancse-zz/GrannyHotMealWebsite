<?php
$servername = "localhost";
$username = "root";
$password = "shubhamcs";

//Create connection
$dbname = "shubham";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
   echo "connection failed";
}
else
{
    $name = $_POST['name'];
    $sql = "INSERT INTO list (`info`) VALUES (\'sh\');";
    if($conn->query($sql)==true)
    {
        echo "\n "$name inserted successfully";
    }
    else
    {
        echo "\n Error";
    }
}
    $conn->close();
echo '<html>';
echo '<head></head>';
echo '<body><br/><a href = "create.html">go back</a></body>';
echo '</html>';
?>