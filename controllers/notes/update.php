<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = 1;


//find note
$note = $db->query(
    "select * from notes where id = :id",
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

// authorize 
authorize($note['user_id'] == $currentUserId);

//validation
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required.';
}

// if everythig is ok -> update
if (count($errors)) {
    return view("notes/create.view.php",[
        'heading' => "Edit Note",
        'errors' => $errors,
        'note'=> $note
    ]);
}

$db->query('update notes set body = :body where id =:id',[
    'id' => $_POST['id'],
    'body' => htmlspecialchars($_POST['body'])
]);

header('location:/notes');
die();
