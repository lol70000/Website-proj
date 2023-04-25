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
    echo "$username,$password";
    $checkusername = $conn->prepare("SELECT username, pw FROM user");
    $checkusername->execute();
    echo "hello";
    $countusername = $checkusername->fetchColumn();
    echo"$countusername";
    $checkpasswword = $conn->prepare("SELECT count(name) FROM pw WHERE name=$password AND id_pw=$countusername");
    $checkpasswword->execute();
    $countpassword = $checkpasswword->fetchColumn();
    if($countusername == 0 || $countpassword == 0){
        $data = array("Username/Password nicht vorhanden!");
        header("Content-Type: application/json");
        echo json_encode($data);
    }elseif($countusername > 0 || $countpassword == 0){
        $data = array("Login was succesful!");
        header("Content-Type: application/json");
        echo json_encode($data);
    };
}catch(PDOException $e){
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
};