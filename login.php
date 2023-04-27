<?php
//$servername = "aropawoz.mysql.db.internal";
//$user = "aropawoz_tobilu";
//$pw = "WTp5g3bsVA8HfC-*f3+N";
//$name = "aropawoz_financialplanning"
$servername = "localhost";
$user = "root";
$pw = "root";
$name ="ef5_webproj";

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
    //echo "$username,$password";
    $checkusername = $conn->prepare("SELECT username, pw FROM user WHERE  username = '$username'");
    $checkusername->execute();
    $countusername = $checkusername->fetchColumn();
    //echo"$countusername";
    //echo "step one";
    $checkpasswword = $conn->prepare("SELECT name FROM pw WHERE name = '$password'");
    $checkpasswword->execute();
    $countpassword = $checkpasswword->fetchColumn();
    //echo"$countpassword";
    //echo"step two";
    if($countusername == NULL || $countpassword == NULL){
        $data = array("0");
        header("Content-Type: application/json");
        echo json_encode($data);
    }elseif($countusername != NULL || $countpassword != NULL){
        $data = array("1");
        header("Content-Type: application/json");
        echo json_encode($data);
    };
}catch(PDOException $e){
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
};