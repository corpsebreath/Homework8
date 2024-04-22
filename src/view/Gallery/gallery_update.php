<h3>Update</h3>
<button>Update</button>
<button>
    <a href="/gallery">Back</a>
</button>
<?php
if(!empty($_GET['gallery_id'])){
    $gallery_id = $_GET['gallery_id'];
    $title = $_GET['title'];
    $description = $_GET['description'];
    $author_id = $_GET['author_id'];
}else{
    header('Location: /gallery');
}
?>
<form method = "post">
    <p>
        <label>title</label>
        <input name="title" value=<?= $title ?>>
    </p>
    <p>
        <label>description</label>
        <input name="description" value=<?= $description ?>>
    </p>
    <p>
        <label>author_id</label>
        <input name="author_id" value=<?= $author_id ?>>
    </p>
    <input type="hidden" name="gallery_id" value = <?= $gallery_id ?>>
    <input type="submit" name="save">
</form>
