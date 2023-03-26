<?php

require 'controllers/Validator.php';
$config = require('config.php');
$db = new Database($config['database']); // creating a new DB instance

$heading = 'Create a note';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A note 1000 chars max';
    }

    if (empty($errors)){
        $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/notes/create.view.php';

