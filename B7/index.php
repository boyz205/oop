<?php
abstract class Dongvat
{
    protected $name;
    abstract protected function getName();
}
class ConTrau extends Dongvat
{
    //error
}
class ConBo extends Dongvat
{
//    abstract protected function hi() {
//        //error
//    };
    public function getName()
    {
        return $this->name;
    }
}
$abstract = new Dongvat(); //error