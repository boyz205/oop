<?php
class Bar
{
    public function __construct()
    {
        echo '<br>Class Bar được khởi tạo';
    }
    public function __destruct()
    {
        echo '<br>Class Bar được hủy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        parent::__construct();
        echo '<br>Class Foo được khởi tạo';
    }
    public function __destruct()
    {
        parent::__destruct();
        echo '<br>Class Foo được hủy';
    }
    public function hi() {
        echo "<br>hi";
    }
}
$foo = new Foo();
$foo->hi();
$foo->hi();