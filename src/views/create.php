<?php
use Back\Notas\models\Note;

if(count($_POST) > 0){

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ?$_POST['content'] : '';

    $note = new Note($title, $content);
    $note->save();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create note</title>
</head>
<body>
    <h1>Create note</h1>
    <form action="?view=create" method="POST">
        <input type="text" name="title" placeholder="Title...">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Create Note">
    </form>
</body>
</html>