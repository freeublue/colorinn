<?
function maketb($connection, $tb, $idfield, $fieldsarray) { 
include "$connection";
$fields3 = implode(',', $fieldsarray);
$strd = "CREATE TABLE " . $tb . " (" . $idfield . " INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT , " . $fields3 . ")";
$sq = $db->exec($strd);
echo $db->lastErrorMsg();
$db->close(); } 
function instb($connection, $tb, $fieldsarray, $fieldsarray2) { 
require "$connection";
$fields3 = implode(',', $fieldsarray);
$count = count($fieldsarray2);
for($i=0;$i<$count;$i++) { 
$fields5[$i] = "'" . $fieldsarray2[$i] . "'"; } 
$fields4 = implode(',', $fields5);
echo "$fields3<br>$fields4<br>";
$strd = "INSERT INTO " . $tb . "(" . $fields3 . ") values(" . $fields4 . ")";
$sq = $db->query($strd);
echo $db->lastErrorMsg();
$db->close(); } 

 function input_formval($input_id, $input_type, $input_label, $size, $val) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' value='" . $val . "' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "'></div></div></div>"; 
 echo "$input_form"; } 
 function cl( $input )
{
    $input = trim( htmlentities( strip_tags( $input,"," ) ) );

    if( get_magic_quotes_gpc() )
        $input = stripslashes( $input );

    $input = SQLite3::escapeString( $input );
$input = str_replace('http', ' ', $input);
$input = str_replace('https', ' ', $input);
$input = str_replace('a href', ' ', $input);
    return $input;
} 

$stp = "brand new world";
function cr($stp, $string, $action = 'enc'){
            $res = '';
            if($action !== 'enc'){
                $string = base64_decode($string);
            } 
            for( $i = 0; $i < strlen($string); $i++){
                    $c = ord(substr($string, $i));
                    if($action == 'enc'){
                        $c += ord(substr($stp, (($i + 1) % strlen($stp))));
                        $res .= chr($c & 0xFF);
                    }else{
                        $c -= ord(substr($stp, (($i + 1) % strlen($stp))));
                        $res .= chr(abs($c) & 0xFF);
                    }
            }
            if($action == 'enc'){
                $res = base64_encode($res);
            } 
            return $res;
    }



?>