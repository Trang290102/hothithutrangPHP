<?php

namespace App\Models;

use App\Library\Database;

class Slider extends Database
{
    private $table = null;
    public function __construct()
    {

        parent::__construct();
        $this->table = $this->TableName('slider'); //httt_topic
    }
    // Lấy danh sách topic

    public function slider_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
