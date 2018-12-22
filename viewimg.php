<?

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
?>
<div class='container-fluid'>
<div class='row text-center'>
<?
$id = $_REQUEST['id'];

$sq = ("SELECT * FROM imgtb WHERE id = '$id'");
$res = mysqli_query($conn, $sq);
while($ro = mysqli_fetch_assoc($res ) ) { 
echo "<div class='col-12'><h2>$ro[im_subhead]</h2>";
echo "</div>"; } 
?>
</div>
<div style='margin-top:2em;' class='row text-center'>

<div class='col-2'><i style='color:#eee7e0;' class="fas fa-graduation-cap"></i><p>Pictures</p>
</div>
<div class='col-2'><i style='color:#eee7e0;' class="fas fa-chalkboard"></i><p>Pages</p>
</div>
<div class='col-2'><i style='color:#eee7e0;' class="fas fa-chalkboard-teacher"></i><p>Images</p>
</div>
<div class='col-2'><i style='color:#eee7e0;' class="fas fa-chalkboard"></i><p>Download</p>
</div>
<div class='col-2'><i style='color:#eee7e0;' class="fas fa-laptop"></i><p>Free</p>
</div>
<div class='col-2'><i style='color:#eee7e0;' class="fas fa-desktop"></i><p>Art</p>
</div>




</div>

<?


$sqlx = ("SELECT * FROM imgtb WHERE id = '$id'");
$resx = mysqli_query($conn, $sqlx);

while($row = mysqli_fetch_assoc($resx ) ) { 
$rule = "text-center";
$size = 2;

$cont[0] = "<img class='image-fluid' src='$row[im_image]' width='100%' />";
$cont[1] = "<h2 style='color:black;'>$row[im_title]</h2><h4 style='color:black;'>$row[im_subhead]</h4><p style='color:black;'>$row[im_txt]</p><p style='color:black;'><b>Author</b><br>$row[im_author]</p><p style='color:black;'><b>License</b><br>$row[im_license]</p><p style='color:black;'><b>Difficulty</b><br>$row[im_descp]</p><p><a class='btn btn-sm btn-info' role='button' href='downloadimg.php
?id=$row[ab_id]&&width=800&&height=800'>Download small</a></p><a class='btn btn-sm btn-info' role='button' href='downloadimg.php
?id=$row[ab_id]&&width=1200&&height=1200'>Download medium</a></p><a class='btn btn-sm btn-info' role='button' href='downloadimg.php
?id=$row[ab_id]&&width=1600&&height=1600'>Download large</a></p>";


$colsize = array("col-6", "col-6");
rowcol($idx, $rule, $size, $cont, $colsize, $gg); } 
echo "<div class='row'><div class='col-12'>";
echo "<p class='text-center' style='color:#324E98;'>-----------------------* <i class='fab fa-twitter fa-1x' style='color:#324E98;'></i><i class='fab fa-instagram fa-1x' style='color:#324E98;'></i><i class='fab fa-facebook-f fa-1x' style='color:#324E98;'></i> *---------------------</p></div></div>";

require "footer.php";
require "bootstrapbottom.php";
?>
</div>