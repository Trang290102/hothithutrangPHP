<?php

namespace App\Models;

use App\Library\Database;

class Product extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('product'); //httt_product
    }
    //lay danh sach product
    public function product_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
