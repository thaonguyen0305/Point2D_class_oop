<?php 

include_once('./src/Point_2d.php');
include_once('./src/Point_3d.php');

$point2d = new Point_2d(3,4);
echo 'X: ' . $point2d->getX() .'<br/>';
echo 'Y: ' . $point2d->getY() .'<br/>';

$point2d->setXY(5, 6);

$xy = $point2d->getXY();
echo "XY: " . $xy[0] . ", " . $xy[1] . "<br/>";

echo "Point_2d: " . $point2d->toString() . "<br/>";


$point3d = new Point_3d(1, 2, 3);

echo "X: " . $point3d->getX() . "<br/>";
echo "Y: " . $point3d->getY() . "<br/>";
echo "Z: " . $point3d->getZ() . "<br/>";


$point3d->setXYZ(4, 5, 6);


$xyz = $point3d->getXYZ();
echo "XYZ: " . $xyz[0] . ", " . $xyz[1] . ", " . $xyz[2] . "<br/>";


echo "Point3D: " . $point3d->toString() . "<br/>";  