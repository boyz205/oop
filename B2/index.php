<?php
class ConNguoi {
    public $name;
    public $mat;
    public $mui;
    const sochan = 2;
    public function an()
    {
    }
    public function noi($caunoi)
    {
        return $caunoi;
    }
    public function di()
    {
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSoChan()
    {
        return self::sochan;
    }
}
$connguoi = new ConNguoi();
$connguoi->name = 'viet';
echo $connguoi->name;
echo $connguoi->noi('hello');
echo $connguoi::sochan;