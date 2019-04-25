<?
require "bootstraptop.php";
$size = 'xl';
$bootcolor = 'dark';
$bootcolor2 = 'dark';
$navname = 'Home';
$quer = "SELECT * FROM pagname";
$wres = mysqli_query($conn, $quer);
while ($wro = mysqli_fetch_assoc($wres) ) { 
$pntitle[] = $wro[pn_title];
$pnpage[] = $wro[pn_title] . '.php'; 
} 

$pagelinkarray = array( "contact.php" => "Contact", $pnpage[0] => $pntitle[0], "login.php" => "Login", "register.php" => "Register", $pnpage[1] => $pntitle[1], $pnpage[2] => $pntitle[2], $pnpage[3] => $pntitle[3]);
$ar = array('Categories >>', 'categories.php');
navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar); 


?>