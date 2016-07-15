<?php
/**
 * Created by PhpStorm.
 * User: charlied
 * Date: 6/29/16
 * Time: 2:41 PM
 */
$client = new MongoClient();
$db = $client->selectDB("looma");
$db->selectCollection("activities")->insert(["Hello"=>"test"]);
