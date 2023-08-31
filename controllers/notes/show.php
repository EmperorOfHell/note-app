<?php

$config = require "config.php";

$heading  = "My Notes";

$id = $_GET['id'];

$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id", 
[
    'id' => $id
    ])->findOrFail();

// dd($note);
$currentUserId = 1;

authorize($note['user_id'] == $currentUserId);

require "views/notes/show.view.php";