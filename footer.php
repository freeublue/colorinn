<?
echo "</div>";


echo "<div style='background:#324E98;color:white;' class='row'>";
echo "<div style='color:white;' class='col-12 text-center'><h4 style='color:white;margin-top:3em;'>Categories</h4><hr style='background:#76B4D9;margin-top:3em;'></div></div>";




echo "<div style='background:#324E98;' class='row text-center'>";
echo "<div class='col-6 text-center'>";
echo "<ul style='color:white;' class='list-unstyled text-center'>";
 $sql3 = ("SELECT * FROM cate");
  $re3 = mysqli_query($conn, $sql3);
while($row = mysqli_fetch_assoc($re3) ) { 

echo "<li><a style='color:white;margin-left:20px;' href='categorypage.php?id=$row[id]'>$row[title]</a> </li>"; } 
echo "</ul><br>";
echo "</div>";
echo "<div class='col-6 text-center'>";
echo "<ul style='color:black;' class='list-unstyled text-center'>";
 $sql2 = ("SELECT * FROM lc_type");
 $re = mysqli_query($conn, $sql2);
while($row = mysqli_fetch_assoc($re ) ) { 

echo "<li><a style='color:white;' href='typepage.php?id=$row[lc_title]'>$row[lc_title]</a> </li>"; } 
echo "</ul></div></div>";



