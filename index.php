<?php

require 'func.php';
require 'Database.php';
require 'Response.php';
require 'router.php';
//  connect to MySQL database, and execute the query.

$config = require "config.php";

$db = new Database($config['database']);

// $id = $_GET['id'];

// $query = "select * from posts where id = :id";

// $posts = $db->query($query, ['id' => $id])->fetch();

