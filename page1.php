<?php

// Création de l'image
$image = imagecreatetruecolor(200, 200);
$trianglePoints = array(
  100, 80, // Point 1 (x,y)
  90, 120, // Point 2 (x,y)  
  110, 120 // Point 3 (x,y)
);

// Allocation de quelques couleurs
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);

imagefilledarc($image, 100, 100, 180, 180, 0, 0, $navy, IMG_ARC_PIE); // Tête
imagefilledarc($image, 50, 75, 30, 30, 0, 0, $gray, IMG_ARC_PIE); // Oeil gauche
imagefilledarc($image, 150, 75, 30, 30, 0, 0, $gray, IMG_ARC_PIE); // Oeil droite
imagefilledarc($image, 100, 140, 50, 50, 0, 180, $gray, IMG_ARC_PIE); //Bouche
imagefilledarc($image, 25, 50, 50, 50, 100, 320, $navy, IMG_ARC_PIE); // Oreille gauche
imagefilledarc($image, 175, 50, 50, 50, 225, 65, $navy, IMG_ARC_PIE); // Oreille droite
imagefilledpolygon($image, $trianglePoints, 3, $gray); // Nez


// Affichage de l'image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);