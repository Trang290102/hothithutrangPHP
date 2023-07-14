<?php

namespace App\Models;

use App\Library\Database;

class Contact extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('contact'); //httt_contact
    }
    // Lấy danh sách contact
    public function contact_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
