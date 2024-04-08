<table>
    <tr>
        <th>id</th>
        <th>post_name</th>
    </tr>
    <?php foreach ($data['$posts'] as $post) : ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['name'] ?></td>
        </tr>
    <?php endforeach ?>
</table>

