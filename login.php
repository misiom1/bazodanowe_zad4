<?
session_start();
$login = $_POST['login'];
$haslo = $_POST['haslo'];
if(($login=='ania' && $haslo=='abcdef') || ($login=='basia' && $haslo=='12345') || ($login=='kasia' && $haslo=='qwerty')){ $_SESSION['user'] = $login;
if($_POST['ciacho']=='tak') setcookie("user", $login, time()+60*60); }

header("Location: welcome.php");
?>