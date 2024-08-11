
<?php $user='root';
$pw='';
$host='localhost';
// Create connection
$conn = mysqli_connect($host, $user, $pw);
// Check connection
if(!$conn){
// die("Connection failed: ". mysqli_connect_error());
echo '<script>';
    echo 'console.error("Connection failed: ' . $conn->connect_error . '");';
    echo '</script>';
}

echo '<script>';
echo 'console.log("Connected successfully");';
echo '</script>';


?>