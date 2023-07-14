<?php

namespace App\Models;

use App\Library\Database;

class Topic extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('topic'); //httt_topic
    }
    // Lấy danh sách topic

    public function topic_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
