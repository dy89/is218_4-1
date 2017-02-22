<?php
require_once('database.php');

$name = filter_input(INPUT_POST, 'name');

// Delete category from the database
if ($name !== null) {
    $query = 'DELETE FROM categories
              WHERE categoryName = :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}
// Display the Category List page
include('category_list.php');