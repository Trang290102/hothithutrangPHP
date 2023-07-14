<?php

namespace App\Models;

use App\Library\Database;

class Post extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('post'); //httt_post
    }
    // Lấy danh sách post

    public function post_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
