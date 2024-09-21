<?php

use Core\Response;
use Core\Database;
use Core\Router;

// require parameter
if (!array_key_exists('id', $_GET)) {
    Router::abort(Response::BAD_REQUEST);
}

// Fetch and check that it exists
$note = $db->query('SELECT * FROM notes WHERE id = :id', ...[
    'id' => $_GET['id'],
])->fetch();


// Note from another user
Core\authorize($note['user_id'] === $currentUserId);


// Fetch note
$title = "Note: {$_GET['id']}";
require "views/note.view.php";