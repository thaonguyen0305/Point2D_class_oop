<?php
class Point_3d extends Point_2d 
{
    function __construct(public float $x, public float $y, public float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ() {
        return $this->z;
    }

    public function setZ($z) {
        $this->z = $z;
    }

    public function getXYZ() {
        return [$this->x, $this->y, $this->z];
    }

    public function setXYZ($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function toString() {
        return "($this->x, $this->y, $this->z)";
    }
}