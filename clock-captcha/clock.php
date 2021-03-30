<?php
session_start();

$sethour = 12 - rand(1,12) ;
$setminute = 12 - rand(1,12);

if($setminute < 2) {
    $answer_minute = '0'.($setminute * 5);
} else {
    $answer_minute = $setminute * 5;
}

if($sethour == 0) {
    $answer_hour = '12';
} elseif($sethour < 10) {
    $answer_hour = '0'.$sethour;
} else {
    $answer_hour = $sethour;
}

$_SESSION['captcha']['clock'] = md5($answer_hour . ':' . $answer_minute);
unset($answer_minute, $answer_hour);

// Face selection
$rand = rand(1,6);
$face = './clocks/face'.$rand.'.png';

// Hands selection
$rand = rand(1,6);
$hour = './clocks/hour'.$rand.'.png';
$minute = './clocks/minute'.$rand.'.png';

// Rotation
$sethour = 360 - (($sethour * 30) + ($setminute * 2.5));
$setminute = 360 - ($setminute * 30);

// minute hand
$minute = imagecreatefrompng($minute);

// Rotate if necessary
if(!empty($setminute)) {
    $minute = imagerotate($minute, $setminute, 0);
}

// Save Transparency/Alpha
imagealphablending($minute, true);
imagesavealpha($minute, true);

// Select random color
$col1 = rand(1,255);
$col2 = rand(1,255);
$col3 = rand(1,255);

// Too white?
if($col1 + $col2 + $col3 > 750) {
    $col = rand(0,2);
    if($col == 0) {
        $col1 = $col1 - rand(50,100);
    } elseif($col == 1) {
        $col2 = $col2 - rand(50,100);
    } elseif($col == 2) {
        $col3 = $col3 - rand(50,100);
    }
}

// Colorize the minute hand
imagefilter($minute, IMG_FILTER_COLORIZE, $col1, $col2, $col3);

// face
$face = imagecreatefrompng($face);

//Get the sizes of both pix
$face_width=imagesx($face);
$face_height=imagesy($face);
$minute_width=imagesx($minute);
$minute_height=imagesy($minute);

$dest_x = ( $face_width / 2 ) - ( $minute_width / 2 );
$dest_y = ( $face_height / 2 ) - ( $minute_height / 2 );

// Merge the face with minute
imagecopy($face, $minute, $dest_x, $dest_y, 0, 0, $minute_width, $minute_height);

// Destroy the minute hand as its no longer needed
imagedestroy($minute);

// hour hand
$hour = imagecreatefrompng($hour);

// Rotate if necessary
if(!empty($sethour)) {
    $hour = imagerotate($hour, $sethour, 0);
}

// Save Transparency/Alpha
imagealphablending($hour, true);
imagesavealpha($hour, true);

// Colorize the hour (the same as we did the minute hand)
imagefilter($hour, IMG_FILTER_COLORIZE, $col1, $col2, $col3);

$hour_width = imagesx($hour);
$hour_height = imagesy($hour);
$dest_x = ( $face_width / 2 ) - ( $hour_width / 2 );
$dest_y = ( $face_height / 2 ) - ( $hour_height / 2 );

imagecopy($face, $hour, $dest_x, $dest_y, 0, 0, $hour_width, $hour_height);

imagedestroy($hour);

header("Cache-Control: no-cache");
header("Pragma: nocache");
header('Content-type: image/png');

imagepng ($face);

imagedestroy($face);
die();