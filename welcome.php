<?
session_start();
include("logincheck.php");
if(isset($_GET['wyloguj'])){
       
setcookie("user", "", time() - 3600);
session_destroy();
header("Location: ?");
}
else
{
if(logincheck()==false) echo "Nie jestes zalogowany! <a href='login.html'>Zaloguj</a>";
else{
echo "Witam ". logincheck()."<br> <img src='http://i40.tinypic.com/2lwat5z.gif'>";
echo "<br><a href='?wyloguj'>Wyloguj</a>";
}
}
?> 