<?php
$servername = "aropawoz.mysql.db.internal";
$user = "aropawoz_tobilu";
$pw = "WTp5g3bsVA8HfC-*f3+N";
$name = "aropawoz_financialplanning";
//$servername = "localhost";
//$user = "root";
//$pw = "root";
//$name ="ef5_webproj";

try {
    header("Access-Control-Allow-Origin: *");
    $conn = new PDO("mysql:host=$servername;dbname=$name;charset=utf8", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
};

try{
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$username ,$password";
    $insertnewpassword = $conn->prepare("INSERT INTO pw(name) Values('$password')");
    $insertnewpassword->execute();
    $countpassword = $conn->prepare("SELECT count(name) FROM pw");
    $countpassword->execute();
    $countFinalPW = $countpassword->fetchColumn();
    echo " made it";
    $insertnewuser = $conn->prepare("INSERT INTO user(username, pw) VALUES('$username','$countFinalPW')");
    $insertnewuser->execute();
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}
?>