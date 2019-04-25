<div class='row text-center'>
<div class='col-4 infobox2'><p>Categories</p>
<p>
<?
$sqlp = mysqli_query($conn, "SELECT * FROM mainprodcate");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 



echo "$row[mcate_title]<br>";





} 
?>
</p></div>
<div class='col-4 infobox2'><p>Contact</p></div>
<div class='col-4 infobox2'><p>Contact</p></div>

</div>