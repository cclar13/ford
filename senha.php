<?php
session_start();
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$_SESSION['email']= $_POST['email'];


//852 22ac3c5a5bf0b520d281c122d1490650 adm
$padraoadm = "22ac3c5a5bf0b520d281c122d1490650";
//1234 81dc9bdb52d04dc20036dbd8313ed055 usuario
$padraousuario = "81dc9bdb52d04dc20036dbd8313ed055";
//223 115f89503138416a242f40fb7d7f338e cliente
$padraocliente = "115f89503138416a242f40fb7d7f338e";

if ($senha == $padraoadm) {
    header('location:adm.php');
    $_SESSION['senha'] = 1;
} elseif ($senha == $padraousuario) {
    header('location:adm.php');
    $_SESSION['senha'] = 2;
} elseif ($senha == $padraocliente) {
    header('location:adm.php');
    $_SESSION['senha'] = 3;
} else {
  header('location:login.php');
  echo"<h1>error no login</h1>";
}


?>