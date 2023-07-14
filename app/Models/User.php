<?php

namespace App\Models;

use App\Library\Database;

class User extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('user'); //httt_user
    }
    // Lấy danh sách user

    public function user_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
