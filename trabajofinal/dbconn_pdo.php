<!-- acceso a base de datos a través de PDO(PHP Data Ojects)  -->
<?php

try{

    $darabaseHost  = 'localhost';
    $darabaseName  = 'registro_db';
    $darabseUsername = 'root';
    $darabasePassword = '';

    $conn = new PDO("mysql:host=$darabaseHost;dbname=$darabaseName",$darabseUsername,$darabasePassword);

}catch(PDOException $error){
    echo "conexión no realizada!" .$error->getMessage();
}
?>