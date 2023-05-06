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
    $income = $_POST['income'];
    $rent = $_POST['rent'];
    $food = $_POST['food'];
    $freetime = $_POST['freetime'];
    $clothes = $_POST['clothes'];
    $hygiene = $_POST['hygiene'];
    $others = $_POST['others'];
    $output=[];
    if ($rent != NULL){
        $output[] = $rent;
    };
    if ($food != NULL){
        $output[] = $food;
    };
    if ($freetime != NULL){
        $output[] = $freetime;
    };
    if ($clothes != NULL){
        $output[] = $clothes;
    };
    if ($hygiene != NULL){
        $output[] = $hygiene;
    };
    if ($others != NULL){
        $output[] = $others;
    };
    $number = count($output);
    $x =0;
    $out = 0;
    while($number > $x){
        $out += $output[$x];
        $x += 1;
    };
    if ($income != NULL && $out != NULL){
        $incomeinput = $conn->prepare("INSERT INTO variable(input,output) VALUES('$income','$out')");
    };
    
}catch(PDOException $e){
    echo "connection failes " . $e->getMEssage();
}