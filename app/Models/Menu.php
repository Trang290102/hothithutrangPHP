<?php

namespace App\Models;

use App\Library\Database;

class Menu extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('menu'); //httt_menu
    }
    // Lấy danh sách menu

    public function menu_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
