<?php
class ParentClass
{
    function getClass()
    {
        return 'ParentClass';
    }
}
class ChildClass extends ParentClass
{
    var $name = 'ChildClass';
    function getclass()
    {
        return 'ChildClass';
    }
    function getMethod()
    {
        echo '<br>Đây là phương thức của lớp ' . $this->getclass();
    }
    function getMethodParent()
    {
        echo '<br>Đây là phương thức của lớp ' . parent::getclass();
    }
}
$class = new ChildClass();
$class->getMethod();
$class->getMethodParent();