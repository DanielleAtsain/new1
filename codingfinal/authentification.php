
<?php require_once("connexion.php")?>
<?php
session_start();
$_SESSION=array();
$col_table_name = "admin";
$col_email = "email";
$mdp = md5("mdp");

$req="SELECT * FROM admin WHERE 1";
$rs=mysql_query($req)or die(mysql_error());
if($u=mysql_fetch_assoc($rs)){
$_SESSION['ROLE_ADMIN']=$u['NIVEAU'];
$_SESSION['EMAIL']=$l;
header("location:../cv.php");
}
else{
header("location:../cv.php");
}
?>