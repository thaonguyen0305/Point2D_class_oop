<?php 
class Point_2d 
{
    function __construct(public float $x,
                         public float $y) 
    {
        $this->x = $x;
        $this->y = $y;
    }

    function getX() 
    {
        return $this->x;
    }
    function getY()
    {
        return $this->y;
    }

    function setX(float $x)
    {
        $this->x = $x;
    }
    function setY(float $y)
    {
        $this->y = $y;
    }

    function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function getXY()
    {
        return [$this->x, $this->y];
    }
    
    public function toString() {
        return "($this->x, $this->y)";
    }
}