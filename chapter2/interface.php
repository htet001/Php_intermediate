<?php
// interface GameRules
// {
//     public function createGameSense();
//     public function createVegetables();
//     public function createHousing();
//     public function createActor();
// }
// class inter  implements GameRules
// {
//     public function createGameSense()
//     {
//         echo "hi";
//     }
//     public function createVegetables()
//     {
//         echo "hi";
//     }
//     public function createHousing()
//     {
//         echo "hi";
//     }
//     public function createActor()
//     {
//         echo "hi";
//     }
// }
// $obj = new inter();
// $obj->createVegetables();



interface doing
{
    public function setweapon($weapon);
    public function killnow();
}
class inter implements doing
{
    private $weapon;
    public function setweapon($weapon)
    {
        $this->weapon = $weapon;
    }
    public function killnow()
    {
        echo "I am falling in your " . $this->weapon;
    }
}
$obj = new inter();
$obj->setweapon("smile");
$obj->killnow();
