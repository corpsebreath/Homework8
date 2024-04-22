
<p>░░░░░░░░░░░░░░░░░░░░░▄▀░░▌</p>
<p>░░░░░░░░░░░░░░░░░░░▄▀▐░░░▌</p>
<p>░░░░░░░░░░░░░░░░▄▀▀▒▐▒░░░▌</p>
<p>░░░░░▄▀▀▄░░░▄▄▀▀▒▒▒▒▌▒▒░░▌</p>
<p>░░░░▐▒░░░▀▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒█</p>
<p>░░░░▌▒░░░░▒▀▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄</p>
<p>░░░░▐▒░░░░░▒▒▒▒▒▒▒▒▒▌▒▐▒▒▒▒▒▀▄</p>
<p>░░░░▌▀▄░░▒▒▒▒▒▒▒▒▐▒▒▒▌▒▌▒▄▄▒▒▐</p>
<p>░░░▌▌▒▒▀▒▒▒▒▒▒▒▒▒▒▐▒▒▒▒▒█▄█▌▒▒▌</p>
<p>░▄▀▒▐▒▒▒▒▒▒▒▒▒▒▒▄▀█▌▒▒▒▒▒▀▀▒▒▐░░░▄</p>
<p>▀▒▒▒▒▌▒▒▒▒▒▒▒▄▒▐███▌▄▒▒▒▒▒▒▒▄▀▀▀▀</p>
<p>▒▒▒▒▒▐▒▒▒▒▒▄▀▒▒▒▀▀▀▒▒▒▒▄█▀░░▒▌▀▀▄▄</p>
<p>▒▒▒▒▒▒█▒▄▄▀▒▒▒▒▒▒▒▒▒▒▒░░▐▒▀▄▀▄░░░░▀</p>
<p>▒▒▒▒▒▒▒█▒▒▒▒▒▒▒▒▒▄▒▒▒▒▄▀▒▒▒▌░░▀▄</p>
<p>▒▒▒▒▒▒▒▒▀▄▒▒▒▒▒▒▒▒▀▀▀▀▒▒▒▄▀</p>
<button>
    <a href="/about">Back</a>
</button>
<button>
    <a href="/gallery/update">Update</a>
</button>
<button>
    <a href="/gallery/create">Create</a>
</button>
<button>
    <a href="/gallery/delete">Delete</a>
</button>
<table>
    <tr>
        <th>gallery_id</th>
        <th>title</th>
        <th>description</th>
        <th>author_id</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <?php foreach ($data['$galleries'] as $gallery) : ?>
        <tr>
            <td><?= $gallery['gallery_id'] ?></td>
            <td><?= $gallery['title'] ?></td>
            <td><?= $gallery['description'] ?></td>
            <td><?= $gallery['author_id'] ?></td>
            <td><a href=/gallery/update?id=<?= $gallery['gallery_id'] ?>>update</a></td>
            <td><a href=/gallery/delete?id=<?= $gallery['gallery_id'] ?>>delete</a></td>
        </tr>
    <?php endforeach ?>
</table>