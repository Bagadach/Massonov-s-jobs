<?php
class car
{
    protected $carmark;
    protected $carclass;
    protected $weight;

    public function __construct(string $carmark, string $carclass, int $weight, string $fullname, int $power)
    {
        $this->carmark=$carmark;
        $this->carclass=$carclass;
        $this->weight=$weight;
        $this->fullname=$fullname;
        $this->power=$power;
    }

    public function getcarmark(): string
    {
        return $this->carmark;
    }

    public function setcarmark($carmark): void
    {
        $this->carmark = $carmark;
    }

    public function getcarclass(): string
    {
        return $this->carclass;
    }

    public function setcarclass($carclass): void
    {
        $this->carclass = $carclass;
    }

    public function getweight():string
    {
        return $this->weight;
    }

    public function setweight($weight): void
    {
        $this->weight = $weight;
    }

    function start()
    {
        echo "Пристегнитесь, начинаем движение";
    }

    function stop()
    {
        echo "Полная остановка";
    }

    function turnright()
    {
        echo "Сделайте крутой поворот направо";
    }

    function turnleft()
    {
        echo "А теперь налево";
    }
}

Class driver extends car
{
    protected $fullname;
    protected $experience;

    public function __construct(string $fullname, string $experience)
    {
        $this->fullname = $fullname;
        $this->experience = $experience;
    }

    public function getname()
    {
        return $this->fullname;
    }

    public function setname($fullname): void
    {
        $this->fullname = $fullname;
    }

    public function getexperience()
    {
        return $this->experience;
    }

    public function setexperience($experience): void
    {
        $this->fullname = $experience;
    }
    }

Class engine extends car{
    protected $power;
    protected $company;
    public function __construct(int $power, string $company){
        $this->power = $power;
        $this->company= $company;
    }
    public function getpower(){
        return $this->power;
    }
    public function setpower($power):void
    {
        $this->power=$power;
    }
    public function getcompany(){
        return $this->company;
    }
    public function setcompany($company):void
    {
        $this->company=$company;
    }
}

$inf= new car ('Мерседес','S',1000,'Азат Жардемов',111);
echo "Уважаемый ".$inf->fullname ."! " .$inf->start() ."   ".'<br>';
echo "Водитель машины" .$inf->getcarmark() ." класса " .$inf->getcarclass() .$inf->stop();



