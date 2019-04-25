<?

function navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbarfixedtop ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbarfixedbottom ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbardropdown ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbardropdownsearch ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function blist($id, $type, $listclass, $size, $contentarray, $opt) {   
if($type == ul) { 
echo "<ul id='$id' class='$listclass'>"; } else { 
echo "<ol id='$id' class='$listclass'>"; }     

$size = count($contentarray);
for($i=0;$i<$size;$i++) { 
        echo "<li id='$opt[$i]'>$contentarray[$i]</li>"; } 
        if($type == ul) { 
      echo "</ul>"; } else { 
echo "</ol>"; } 
      } 
      function btable($id, $tableclass, $rowcount, $conte, $optsid) {   

echo "<div class='row'><div class='col-12'><table id='$id' class='$tableclass'>";      

$size = count($conte);
$div = $size/$rowcount;

for($r=0;$r<$rowcount;$r++) { 
if($r == 0) { 
echo "<thead>";
echo "<tr>";


for($i=(($r*$div));$i<(($r*$div)+($div));$i++) { 

        echo "<th id='$optsid[$i]'>$conte[$i]</th>"; } 
        echo "</tr></thead><tbody>"; } else { 
        
        echo "<tr>";


for($i=(($r*$div));$i<(($r*$div)+($div));$i++) { 

        echo "<td id='$optsid[$i]'>$conte[$i]</td>"; } 
        echo "</tr>"; }  } 
        
        
echo "</tbody></table></div></div>"; } 
function input_form($input_id, $input_type, $input_label, $size) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "'></div></div></div>"; 
 echo "$input_form"; } 
 function rowcol($id, $rule, $size, $contentarray, $colsize, $gg) {       

echo "<div id='$id' class='row $rule'>";
for($i=0;$i<$size;$i++) { 
        echo "<div id='$gg[$i]' class='$colsize[$i]'>$contentarray[$i]</div>"; } 
        
      echo "</div>";
      } 
      function input_formv($input_id, $input_type, $input_label, $size, $val) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "' value='" . $val . "'></div></div></div>"; 
 echo "$input_form"; } 












        
      
?>