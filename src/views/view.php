<?php
use Back\Notas\models\Note;

if(count($_POST) > 0){

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $uuid = isset($_POST['id']) ? $_POST['id'] : '';

    $note = Note::get($uuid);

    $note->setTitle($title);
    $note->setContent($content);

    $note->update();
}
else if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
}
else
    header('location: http://notasapp.test/?view=home');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View note</title>
</head>
<body>
    <h1>View Note</h1>

    <form action="?view=view&id=<?php echo $note->getUUID() ?>" method="POST">
        <input type="text" name="title" placeholder="Title..." value="<?php echo $note->getTitle() ?>">
        <textarea name="content" id="" cols="30" rows="10"><?php echo $note->getContent() ?></textarea>
        <input name="id" type="hidden" value="<?php echo $note->getUUID() ?>">
        <input type="submit" value="Update Note">
    </form>
</body>
</html>