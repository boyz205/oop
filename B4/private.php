<?php
class Person
{
    private $name;
    private function run()
    {
        return 'Đây là hàm run';
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function getRunMethod()
    {
        return $this->run();
    }
}
$person = new Person();
$person->name;  //error
$person->run(); //error
$person->setName("Viet");
echo '<br>'.$person->getName();
echo '<br>'.$person->getRunMethod();