<?php
/*$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// Query Class
$query = new MongoDB\Driver\Query(array('age' => 30));

// Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$cursor = $manager->executeQuery('testDb.testColl', $query);

// Convert cursor to Array and print result
print_r($cursor->toArray());*/

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['username' => 'admin', 'password' => 'Mouahahahahahaha!!!:p']);
$manager->executeBulkWrite('db.users', $bulk);

?>
