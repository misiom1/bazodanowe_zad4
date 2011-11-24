<?
function logincheck()
{
	if(isset($_SESSION['user'])) return $_SESSION['user'];
	else if(isset($_COOKIE['user']))
	{
		$_SESSION['user']=$_COOKIE['user'];
		return $_SESSION['user'];		
	}
	else return false;
}
?>