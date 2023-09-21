<?php

use appp\database\DBgen;

require_once "vendor/autoload.php";


class runmysql
{
    private $db;

    public function __construct()
    {

        $shops = [
            ["Apple", "192.168.0.105", "apple", "222", 1],
            ["Microsoft", "192.168.0.106", "microsoft", "333", 1],
            ["Huawei", "192.168.0.107", "huawei", "444", 1],
            ["Oppo", "192.168.0.108", "oppo", "444", 1]
        ];

        $this->db = new DBgen();
        //$this->db->getMultipleShop(1);
        //$this->db->getAllData();
        //$this->db->insertSingleShop("Xiamoi", "192.168.0.104", "xiamoi", "111", 1);
        //$this->db->insertMultipleShop($shops);
        //$this->db->updateShop(3, "Vivo");
        $this->db->deleteShop(5);
    }
}
new runmysql();