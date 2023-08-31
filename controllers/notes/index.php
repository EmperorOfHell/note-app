<?php

$config = require "config.php";

$heading  = "My Notes";


$db = new Database($config['database']);

$notes = $db->query("select * from notes where user_id = 1")->findOrFail();

// dd($notes);

require "views/notes/index.view.php";