<?php
session_start();
$_SESSION["username"]="fitri";
$_SESSION["password"]="123";
if (isset($_POST["login"])){
    if ($_POST["username"]=="fitri" && $_POST["password"]=="123"){
        header("location:home.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>
