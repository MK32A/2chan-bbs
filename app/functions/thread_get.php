<?php
$thread_array = array();

$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;

