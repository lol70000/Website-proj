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
    include "delete.php";
    $conn = new PDO("mysql:host=$servername;dbname=$name;charset=utf8", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p style='color:rgb(87, 119, 143)'>Connected!<br></p>";
} catch (PDOException $e) {
    echo "<p style='color:rgb(87, 119, 143)'>Connection failed. " . $e->getMessage()."</p>";
};

$createTableUser ='
    CREATE TABLE user(
        id_user INT AUTO_INCREMENT,
        username VARCHAR(100) NOT NULL,
        pw INT NOT NULL,
        PRIMARY KEY(id_user),
        FOREIGN KEY(pw) REFERENCES pw(id_pw)
    );';

$createTablePW ='
    CREATE TABLE pw(
        id_pw INT AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        PRIMARY KEY(id_pw)
    );';

$createTableVariable ='
    CREATE TABLE variable(
        id_variable INT AUTO_INCREMENT,
        input INT NOT NULL,
        output INT NOT NULL,
        PRIMARY KEY(id_variable)
    );';

try{
    $conn->exec($createTablePW);
    $conn->exec($createTableUser);
    $conn->exec($createTableMonthly);
    $conn->exec($createTableVariable);
    echo "<p>created</p>";
}catch(PDOException $e){
    echo "<p>create failed:" . $e->getMessage()."</p>";
};
?>
