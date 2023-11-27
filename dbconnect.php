<?php
$hostname='localhost';
$username= 'root';
$password= '';
$dbname= 'register';
$dbcon= new PDO("mysql:host={$hostname};dbname={$dbname}", $username, $password, );
if($dbcon){
   //echo"cooncted";
}else{
    echo "error";
}
?>