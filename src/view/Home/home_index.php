<table>
    <tr>
        <th>post_id</th>
        <th>title</th>
        <th>content</th>
        <th>author_id</th>
        <th>Update</th>
        <th>delete</th>
    </tr>
    <?php foreach($data['$posts'] as $post): ?>
        <tr>
            <td><?= $post['post_id'] ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['content'] ?></td>
            <td><?= $post['author_id'] ?></td>
            <td><a href="/home/update?id=<?= $post['post_id'] ?>">update</a></td>
            <td><a href="/home/delete?id=<?= $post['post_id'] ?>">delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
