<?php

use App\Models\Category;

$category = new Category(); //tạo đối tượng

$id = $_REQUEST["id"];
$row = $category->category_row($id);
//var_dump($row);
//echo "<hr>";

$category->category_delete($id);
header("location: index.php?option=category&cat=trash");
