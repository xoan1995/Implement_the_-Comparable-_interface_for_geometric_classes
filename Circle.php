<?php
class Circles{
    public $radius;
    public $name;
    public function __construct($radius,$name)
    {
        $this->radius=$radius;
        $this->name=$name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter(){
        return pi()*$this->radius*2;
    }
}
