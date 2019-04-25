<?
session_start();

require "header.php";


?>
<div class='container-fluid'>
<div class='row'>

<?
$id = $_REQUEST['id'];
$sqlp = mysqli_query($conn, "SELECT * FROM proditem1 WHERE it_maincate = '$id'");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 




           


           echo "<div class='col-4 text-center'><a href='itempage.php?id=$row[id]'><h4 style='background:silver;color:#3F729B;padding:8px;height:80px;'>$row[it_title]</h4></a><img src='$row[it_mainimage]' height='250px'/><p style='text-align:right;margin-top:1em;'><a class='btn btn-sm btn-dark' href='itempage.php?id=$row[id]' role='button'>View</a></p>
           </div>";
} 
?>





</div>







<? 
require "footer.php";
?>




</div><!container>

<?
require "bootstrapbottom.php";
?>