<?php
class Rent
{
    public $car, $driver;
    public function __construct(Car $car, Driver $driver)
    {
        $this->car = $car;
        $this->driver = $driver;
    }
    public function getCar(): Car
    {
        return $this->car;
    }
    public function getDriver(): Driver
    {
        return $this->driver;
    }
}


class Driver
{
    public $name, $age, $family, $salary, $martialStatus;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function getFamily(): array
    {
        return $this->family;
    }
    public function setFamily(array $family)
    {
        $this->family = $family;

        return $this;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }
    public function setSalary(float $salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function getMartialStatus(): bool
    {
        return $this->martialStatus;
    }
    public function setMartialStatus(bool $martialStatus)
    {
        $this->martialStatus = $martialStatus;

        return $this;
    }
}

class Car
{
    public $brand, $model, $price, $spares, $available;
    public function __construct(string $brand, int $model, float $price, array $spares, bool $available)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->available = $available;
    }


    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getModel(): int
    {
        return $this->model;
    }
    public function getPrice(): float
    {
        return $this->model;
    }
    public function getSpares(): array
    {
        return $this->spares;
    }
    public function getAvailable(): bool
    {
        return $this->available;
    }
}

$MgMg = new Driver();
$MgMg->setName("Mg Mg");
$MgMg->setAge(26);
$MgMg->setFamily(["Father" => "U Mya", "Mother" => "Daw Hla", "Sister" => "Khin Khin"]);
$MgMg->setSalary(200000);
$MgMg->setMartialStatus(false);

$MM = new Driver();
$MM->setName("Aung Aung");
$MM->setAge(31);
$MM->setFamily(["Father" => "U Tin", "Mother" => "Daw Nu", "Sister" => "Nyein"]);
$MM->setSalary(250000);
$MM->setMartialStatus(true);

$toyota = new Car("Toyota", 2020, 30.6, ["Tissues", "PDK", "Cupon"], TRUE);
$macede = new Car("Marcede", 2020, 40.6, ["Tissues", "PDK"], FALSE);

$rent1 = new Rent($toyota, $MgMg);
$rent2 = new Rent($macede, $MM);

$list = [$rent1, $rent2];
echo "There are " . count($list) . " cars in this company";
echo "<hr>";
$seridata = serialize($list);
echo $seridata;
$ary = unserialize($seridata);
echo "<pre>" . print_r($ary, true) . "</pre>";
echo "<hr>";
echo $list[1]->getCar()->getBrand();