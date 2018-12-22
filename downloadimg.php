<?php
error_reporting(0);
function resize($originfile, $quality, $width, $height) { 
$filename = $originfile;

// height and width
$width = $width;
$height = $height;

list($width_begin, $height_begin) = getimagesize($filename);

$ratio = $width_begin/$height_begin;

if ($width/$height > $ratio) {
   $width = $height*$ratio;
} else {
   $height = $width/$ratio;
}


if(substr($filename, -4) == '.jpg') { 
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_begin, $height_begin);
$cx = substr($filename, 0, -4);
$dx = substr($filename, -4);
$fadx = $cx . 'res' . $dx;
$destfile = $fadx;
imagejpeg($image_p, $destfile, $quality); } elseif (substr($filename, -4) == '.png') {

$image = imagecreatefrompng($filename);
$image_p = imagecreatetruecolor($width, $height);
imagealphablending($image_p, false);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_begin, $height_begin);
$cx = substr($filename, 0, -4);
$dx = substr($filename, -4);
$fadx = $cx . 'res' . $dx;
$destfile = $fadx;
imagesavealpha($image_p, true);
$qual = substr($quality, 0, -1);
$qualit = intval($qual);
imagepng($image_p, $filename, $qualit);


 }
echo "<img src='$destfile' />"; } 
$id = $_REQUEST[id];
$width = $_REQUEST[width];
$height = $_REQUEST[height];
$quality = 100;
require "config.php";
$sql = ("SELECT * FROM imgtb WHERE id = '$id'");
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res ) ) { 
$originfile = $row[im_image]; } 
resize($originfile, $quality, $width, $height)

?>