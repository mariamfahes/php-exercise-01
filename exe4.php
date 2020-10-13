<?php 
$genres = array( "musicals" => array("Oklahoma", "The Music Man", "South Pacific"),
"dramas" => array("Lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
"mysteries" => array("The Maltese Falcon", "Rear Window", "North by Northwest"));
print_r($genres);
foreach ($genres as $key=>$value) {
    echo (strtoupper($key))."<br />";
foreach ($value as $iKey => $iValue) {
echo " ----> $iKey = $iValue<br />";
}
} 
function compare($x, $y){
if ( $x[1] == $y[1] )
return 0;
else if ( $x[1] > $y[1] )
return -1;
else
return 1;
}
function compare2($x2, $y2) {
if ($x[2] == $y[2])
return 0;
elseif ($x[2] > $y[2])
return -1;
else
return 1;
}
usort($genres, 'compare');
usort($genres, 'compare2');
    foreach ($genres as $key => $value) {
    echo "Movie Genre Values for Key #".$key.":<br />";
    foreach ($value as $iKey => $iValue) {
    echo " ----> $iKey = $iValue<br />";
    }
    }
 ?>