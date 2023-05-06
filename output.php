<?php

$servername = "aropawoz.mysql.db.internal";
$username = "aropawoz_tobilu";
$password = "WTp5g3bsVA8HfC-*f3+N";
$name = "aropawoz_financialplanning";
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$name ="ef5_webproj";

//Establish connection with database
try{
    $conn = new PDO("mysql:host=$servername;dbname=$name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed.<br></p>". $e->getMessage();
};

try{
    $getout = $conn->prepare("SELECT output FROM variable");
    $getout->execute();
    $arrout = $getout->fetchAll();
    $getin = $conn->prepare("SELECT input FROM variable");
    $getin->execute();
    $arrin = $getin->fetchAll();
    $data = array($arrout&','&$arrin);
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();
}catch(PDOException $e){
    echo "Fail" .$e->getMessage();
}