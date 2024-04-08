<h3>Update</h3>
<button>Update</button>
<button>
    <a href="/gallery">Back</a>
</button>
<p>
    <tr>
        <th>id</th>
        <th>gallery_name</th>
    </tr>
    
    <?php foreach ($data['$galleries'] as $gallery) : ?>
        <tr>
        <td><?= $gallery['id'] ?></td>
        <td><?= $gallery['name'] ?></td>
    </tr>
    <?php endforeach ?>
</p>

