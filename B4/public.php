<?php
class Person
{
    public $name;
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}
$person = new Person();
$person->name = 'nam';
$person->setName('viet');
echo $person->getName();