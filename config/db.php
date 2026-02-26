<?php
require __DIR__ . '/../vendor/autoload.php';

function getUsersCollection() {
    $client = new MongoDB\Client("mongodb://localhost:27017");
   $db = $client->i_mongodb;
    return $db->users;
}
?>