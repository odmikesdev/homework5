<?php
class CollorComparison
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);

    }
    private function setRed(int $red) :int
    {
        if($red < 0 OR $red > 255) {
            throw new Exception("Invalid value");
        }
        return $this->red = $red;
    }
    private function setGreen($green) :int
    {
        if($green < 0 OR $green > 255) {
            throw new Exception("Invalid value");
        }
        return $this->green = $green;
    }
    private function setBlue($blue) :int
    {
        if($blue < 0 OR $blue > 255) {
            throw new Exception("Invalid value");
        }
        return $this->blue = $blue;
    }
    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function getBlue()
    {
        return $this->blue;
    }
    public function mix($r, $g, $b)
    {
        $r = $r + $this->red;
        $g = $g + $this->green;
        $b = $b + $this->blue;
        return new CollorComparison($r, $g, $b);
    }

    public function equals(CollorComparison $obj):bool
    {
        if($obj->getRed()===$this->red AND $obj->getGreen()===$this->green AND $obj->getBlue()===$this->blue)
        {
            echo 'Color is equal';
            return true;
        } else {
            echo 'Color is not equal';
            return false;
        }

    }
}

$color = new CollorComparison(22, 22, 22);
echo $color->getRed();
echo "\t";
echo $color->getGreen();
echo "\t";
echo $color->getBlue();
echo '<br>';
$mixcolor = $color ->mix(55,55,55);
echo $mixcolor->getRed();
echo "\t";
echo $mixcolor->getGreen();
echo "\t";
echo $mixcolor->getBlue();
echo '<br>';

$colorCopy = new CollorComparison(22, 22, 22);
$colorCopy->equals($color);

