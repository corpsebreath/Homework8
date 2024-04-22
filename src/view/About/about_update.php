<?php
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $first_name = $_GET['first_name'];
    $second_name = $_GET['second_name'];
    $login = $_GET['phone'];
    $email = $_GET['email'];
}else{
    header('Location: /about/update');
}
?>
<form method = "post">
    <p>
        <label>first_name</label>
        <input name="first_name" value=<?= $first_name ?>>
    </p>
    <p>
        <label>second_name</label>
        <input name="second_name" value=<?= $second_name ?>>
    </p>
    <p>
        <label>login</label>
        <input name="login" value=<?= $login ?>>
    </p>
    <p>
        <label>email</label>
        <input name="email" value=<?= $email ?>>
    </p>
    <input type="hidden" name="id" value = <?= $id ?>>
    <input type="submit" name="save">
</form>
