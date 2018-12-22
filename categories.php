<?
session_start();
require "config.php";
$title = 'ColorInn Coloring Pages and Printables';
require "bootstraptop.php";
require "functions/bootlib.php";
$size = 'xl';
$bootcolor = 'light';
$bootcolor2 = 'light';
$navname = 'Color Inn';
$pagelinkarray = array("contact.php" => "Contact", "about.php" => "About");
$ar = array('Categories >>', 'categories.php');
navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar);
echo "<div id='container-fluid'>";
echo "<div class='row text-center'>";
echo "<div class='col-6 text-center'>";
echo "<ul style='color:black;' class='list-unstyled'>";
 $sql = ("SELECT * FROM cate");
 $res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($res) ) { 

echo "<li><a style='color:black;' href='categorypage.php?id=$row[id]'>$row[title]</a> </li>"; } 
echo "</ul>";
echo "</div>";
echo "<div class='col-6'>";
echo "</div></div>";
require "footer.php";

require "bootstrapbottom.php";

