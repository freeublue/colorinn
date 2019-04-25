<?
require "header.php";


?>
<div class='container-fluid'>

          <div id='section1' class='row'>
          <?
          $sqe = "SELECT * FROM businessname";
          $rese = mysqli_query($conn, $sqe);
          while ($rog = mysqli_fetch_assoc($rese)) { 
          echo "<div class='col-12'><h1>$rog[webname]</h1>"; } 
          ?> 
          <form id='bo'><label>Get Our Newsletter</label><br>
          <input  type='text' name='nlet' /></form>
           </div>
           </div>
           

           

           
           

           


           
           
          <div class='row'>

<?
$id = $_REQUEST['id'];
$sqlp = mysqli_query($conn, "SELECT * FROM proditem1 WHERE id = '$id'");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 
$price = $row['it_mainpricd'];
$cate = $row['it_maincate'];
           echo "<div class='col-6 text-center'><h4 style='background:silver;color:#3F729B;padding:8px;height:80px;'>$row[it_title]</h4><img src='$row[it_mainimage]' class='img-fluid' height='250px'/><p style='text-align:right;margin-top:1em;'><a class='btn btn-sm btn-danger' href='itempage.php?id=$row[id]' role='button'>Buy</a><a class='btn btn-sm btn-dark' href='itempage.php?id=$row[id]' role='button'>Add to Cart</a></p>
           </div>";
           $descp = nl2br($row[it_descp]);
echo "<div class='col-6' text-center'><h4>$row[it_subtitle]</h4>
<p>$descp</p><p><b>R $row[it_mainpricd]</b></p><p>";
$attnum1 = explode('|', $row[it_att_type1]);
$attnum2 = explode('|', $row[it_att_type2]);
} 
$sqlp = mysqli_query($conn, "SELECT * FROM attdec WHERE id ='$attnum1[1]' ");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 
echo "<form action='cart.php' method='post'>";

echo "$row[ad_title]<br>";
echo "$row[ad_nameid]<br>";
echo "$row[ad_type]<br>"; 
$att1 = $row['ad_att1'];
$att2 = $row['ad_att2'];
$att3 = $row['ad_att3'];
$att4 = $row['ad_att4'];
$att5 = $row['ad_att5'];
$att6 = $row['ad_att6'];
$att7 = $row['ad_att7'];
$att8 = $row['ad_att8'];
$att9 = $row['ad_att9'];
$att10 = $row['ad_att10'];

if(strlen($att1) > 1) { 
if($row['ad_type'] == 'AddIn') { 
$price1 = $price + $row['ad_att1price']; } 
else { 
$price1 = $row['ad_att1price'];
}
echo "<select name='att1'>";
echo "<option>$row[ad_att1]";
echo " R $price1 </option>"; } 
else { 
echo " "; } 



echo "<option>$row[ad_att2]";
echo "$row[ad_att2price]</option>";


echo "<option>$row[ad_att3]<br>";
echo "$row[ad_att3price]</option>";


echo "<option>$row[ad_att4]<br>";
echo "$row[ad_att4price]</option>";



echo "<option>$row[ad_att5]<br>";
echo "$row[ad_att5price]</option>";



echo "<option>$row[ad_att6]<br>";
echo "$row[ad_att6price]</option>";



echo "<option>$row[ad_att7]<br>";
echo "$row[ad_att7price]</option>";



echo "<option>$row[ad_att8]<br>";
echo "$row[ad_att8price]</option>";



} 
echo "</select>";
echo "</p>";


$sqlp = mysqli_query($conn, "SELECT * FROM attdec WHERE id ='$attnum2[1]' ");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 
echo "$row[ad_title]<br>";
echo "$row[ad_nameid]<br>";
echo "$row[ad_type]<br>"; 
echo "<select name='att1'>";
echo "<option>$row[ad_att1]";
echo "$row[ad_att1price]</option>";



echo "<option>$row[ad_att2]";
echo "$row[ad_att2price]</option>";


echo "<option>$row[ad_att3]<br>";
echo "$row[ad_att3price]</option>";


echo "<option>$row[ad_att4]<br>";
echo "$row[ad_att4price]</option>";



echo "<option>$row[ad_att5]<br>";
echo "$row[ad_att5price]</option>";



echo "<option>$row[ad_att6]<br>";
echo "$row[ad_att6price]</option>";



echo "<option>$row[ad_att7]<br>";
echo "$row[ad_att7price]</option>";



echo "<option>$row[ad_att8]<br>";
echo "$row[ad_att8price]</option>";



} 
echo "</select>";
echo "</p></div>";
?></div>
             <div class='row'>    
             <?
             $sqlp = mysqli_query($conn, "SELECT * FROM proditem1 WHERE it_maincate = '$cate' LIMIT 0, 3 ");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 
$price = $row['it_mainpricd'];
                  
          echo "<div id ='im2'  class='col-6'><h4 style='color:#3F729B;padding:8px;height:80px;'>$row[it_title]</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>$row[it_subtitle] </p><p><a class='btn btn-sm btn-dark' href='itempage.php?id=$row[id]' role='button'>View</a></p></div>"; } 
           ?>
           

           
 

 
           
           

</div>

 <div id='section8' class='row text-center'>
          
           <div class='col-12'><h4 style='margin-top:2em;'>Linen Accesories</h4><p>From Double to Super King, we have every size imaginable.</p><p></p>
           </div>
           
           
           </div>






<? 
require "footer.php";
?>




</div><!container>

<?
require "bootstrapbottom.php";
?>