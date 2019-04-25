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
           

           

           <div id='section2' class='row'>
          <div id='imghead1' class='col-4'>
           </div>
           
           <div id='imghead3' class='col-4 text-center'><h2 style='margin-top:700px;'>Comfort</h2>
           </div>
           <div id='imghead4' class='col-4'>
           </div>
           </div>
           

           

           <div id='section4' class='row text-center'>
           <div class='col-12'><h2>Uncompromising Quality</h2><p>Only the finest fabrics are selected, from premier sources. We manufacture to the highest possible standards. No orders too small or too large.</p><p><img src='quality.png' height='70px' /></p>
           </div>
           
           </div>

           <div id='section3' class='row text-center'>
          <div class='col-3'>
           </div>
           <div class='col-3'><img class='img-fluid' src='home2.jpg' height='200px' />
           </div>
           <div class='col-3'><img class='img-fluid' src='home3.jpg' height='200px' />
           </div>
           <div class='col-3'>
           </div>
           </div>
           
           <div id='section6' style='margin-top:2em;' class='row text-center'>
          
           <div style='-webkit-clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);
clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);height:480px;background:#EAEAEA;' class='col-12'><h4 style='margin-top:5em;'>Linen Sets</h4><p style='color:gray;'>Choose from a selection of innovative designs, aimed at turning your bedroom into a haven of peace and charm.</p><img class='rounded-circle' height='200px' src='home4.jpg' /></p>
           </div>
           
           
           </div>
                      <div id='section5' class='row text-center'>
          
           <div class='col-12'><h4 style='margin-top:2em;'>Linen Accesories</h4><p>From Double to Super King, we have every size imaginable.</p><p></p>
           </div>
           
           
           </div>

           <div class='row'>
<?

$sqlp = mysqli_query($conn, "SELECT * FROM proditem1");
while($row = mysqli_fetch_assoc($sqlp ) ) { 
$xd = dd . $row[id]; 

           echo "<div class='col-4 text-center'><a href='itempage.php?id=$row[id]'><h4 style='background:silver;color:#3F729B;padding:8px;height:80px;'>$row[it_title]</h4></a><img src='$row[it_mainimage]'  height='250px'/><p style='text-align:right;margin-top:1em;'><a class='btn btn-sm btn-dark' href='itempage.php?id=$row[id]' role='button'>View</a></p>
           </div>";
} 
?>
           
           <div id ='im2'  class='col-4'><h4 style='color:#3F729B;padding:8px;height:80px;'>title</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>descp </p><p><a class='btn btn-sm btn-dark' href='groupspage.php?id=$rows[gr_id]' role='button'>Add to Cart</a></p>
           </div>
           

           <div id ='im3'  class='col-4'><h4 style='color:#3F729B;padding:8px;height:80px;'>title</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>descp </p><p><a class='btn btn-sm btn-dark' href='groupspage.php?id=$rows[gr_id]' role='button'>Add to Cart</a></p>
           </div>
 

 
           
           

</div>
   <div class='row'>
           <div id ='im1'  class='col-4'><h4 style='color:#3F729B;padding:8px;height:80px;'>title</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>descp</p><p><a class='btn btn-sm btn-dark' href='groupspage.php?id=$rows[gr_id]' role='button'>Add to Cart</a></p>
           </div>
           
           <div id ='im2'  class='col-4'><h4 style='color:#3F729B;padding:8px;height:80px;'>title</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>descp </p><p><a class='btn btn-sm btn-dark' href='groupspage.php?id=$rows[gr_id]' role='button'>Add to Cart</a></p>
           </div>
           

           <div id ='im3'  class='col-4'><h4 style='color:#3F729B;padding:8px;height:80px;'>title</h4><p style='color:#f9f7f4;background:#3a4660;padding:5px;opacity:0.6;height:130px;'>descp </p><p><a class='btn btn-sm btn-dark' href='groupspage.php?id=$rows[gr_id]' role='button'>Add to Cart</a></p>
           </div>
 

 
           
           

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