<?php

require "Validator.php";
$config = require "config.php";

$db = new Database($config['database']);

$heading = "Create Note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    $validator = new Validator();

    if (! Validator::string($_POST['body'], $max = 1000)){
        $errors['body'] = 'A body of no more than 1000 characters is required.';
    }

    

    if (empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',
        [
            'body' => htmlspecialchars($_POST['body']),
            'user_id' => 1
        ]);
    }

    
}
require "views/notes/create.view.php";