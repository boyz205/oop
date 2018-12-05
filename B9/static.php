<?php
class ConNguoi
{
    public static $name = 'viet';
    public static function getName()
    {
        return self::$name;
        //return ConNguoi::$name;
    }
    public static function showAll()
    {
        return self::getName();
        //return ConNguoi::getName();
    }
}
echo '<br>'.ConNguoi::$name;
echo '<br>'.ConNguoi::showAll();
//hoặc
$connguoi = new ConNguoi();
echo '<br>'.$connguoi->showAll();
$connguoi::$name = 'nam';
echo '<br>'.ConNguoi::$name;