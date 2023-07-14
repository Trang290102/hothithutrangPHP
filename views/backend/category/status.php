<?php

use App\Models\Category;

$category = new Category(); //tạo đối tượng

$id = $_REQUEST["id"];
$row = $category->category_row($id);
//var_dump($row);
//echo "<hr>";
$status_new = ($row['status'] == 1) ? 2 : 1;
$data = array(
    'updated_at' => date('Y-m-d H:i:s'),
    'updated_by' => 1,
    'status' => $status_new
);
$category->category_update($data, $id);
header("location: index.php?option=category");
