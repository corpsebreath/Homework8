<?php
if(!empty($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $author_id = $_GET['author_id'];
    $title = $_GET['title'];
    $content = $_GET['content'];
}else{
    header('Location: /home/index');
}
?>
<form method = "post">
    <p>
        <label>Title</label>
        <input name="title">
        <input name="title" value=<?= $title ?>>
    </p>
    <p>
        <label>content</label>
        <input name="content" value=<?= $content ?>>
    </p>
    <p>
        <label>author_id</label>
        <input name="author_id" value=<?= $author_id ?>>
    </p>
    <input type="hidden" name="post_id" value = <?= $post_id ?>>
    <input type="submit" name="save">
</form>