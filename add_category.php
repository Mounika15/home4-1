<?php
$categoryName = filter_input(INPUT_POST, 'categoryName');

require_once('database.php');
$query = 'INSERT INTO category_guitar1(categoryName)
	 VALUES
	 (:categoryName)';
	 $statement = $db->prepare($query);
	 $statement->bindValue(':categoryName', $categoryName;
	 $statement->execute();
	 $statement->closeCursor();

include('index.php');
?>
