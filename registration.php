<?php
$servername = "localhost";
$user = "root";
$pw = "root";

try {
    header("Access-Control-Allow-Origin: *");
    $conn = new PDO("mysql:host=$servername;dbname=ef5_webproj;charset=utf8", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:rgb(87, 119, 143)'>Connected!<br></p>";
} catch (PDOException $e) {
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
};

try{
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$username ,$password";
    $insertnewuser = $conn->prepare("INSERT INTO user(name, pw) VALUES('$username','SELECT count() FROM pw')")
}catch(PDOException $e){
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
}
?>