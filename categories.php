<?
session_start();

require "header.php";


?>
<div class='container-fluid'>
<div id='section1' class='row'>
<div class='col-12'><h4>Categories</h4>
<?
$sqlp = mysqli_query($conn, "SELECT * FROM mainprodcate");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 



echo "<a href='productpage.php?id=$row[mcate_title]'>$row[mcate_title]</a><br>";





} 
?>
</div>
</div>






<? 
require "footer.php";
?>




</div><!container>

<?
require "bootstrapbottom.php";
?>