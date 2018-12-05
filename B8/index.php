<?php
interface DongVat
{
    public function getName();
}
interface ConTrau extends Dongvat
{
    public function checkSung();
}
class ConNghe implements ConTrau
{
    private $name = "nghe";
    const SUNG = false;
    public function getName()
    {
        return $this->name;
    }
    public function checkSung()
    {
        return self::SUNG;
    }
}
$nghe = new ConNghe();
echo '<br>'.$nghe->getName();
echo '<br>'.$nghe->checkSung();