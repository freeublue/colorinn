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
?>
<script>
var i = 0;
var txt = 'Color Inn';
var speed = 250;

function type() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(type, speed);
  }
}
</script>

<div  class='container-fluid'>

<div class='row'>

<div id='headimage' class='col-12 text-center'>
<h1 style='margin-top:550px;' id='demo'></h1><h4 style='margin-top:30px;'>Millions of Free Resources</h4><p><form action='search.php' method='post'><input type='text' name='search' /><button class="btn btn-sm btn-light" href="register.php" role="submit">Search</button></p><p style='margin-top:30px;'>Download Free</p>
</div>

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
$id = $_REQUEST[id];
//row id class rule like text-center contentarray colsizearray col id
echo "<div class='row'>";
$sql = ("SELECT * FROM imgtb WHERE im_cate1 = '$id' OR im_cate2 = '$id' Or im_cate3 = '$id'");
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res ) ) { 
echo "<div id='col-4'><a href='viewimg.php
?id=$row[ab_id]'><img src='$row[im_image]' height='200px' /></a></div>";} 
echo "</div>";
require "footer.php";

require "bootstrapbottom.php";
?>
