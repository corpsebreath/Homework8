<section>
    <h2>Наша команда</h2>
    <p>Мы - команда профессионалов, работающая в сфере веб-разработки.</p>
    <p>Наша цель - создавать качественные и инновационные веб-проекты для наших клиентов.</p>
    <button>
        <a href="/home">Главная</a>
    </button>
</section>
<p>
    <tr>
        <th>id</th>
        <th>user_name</th>
    </tr>
    <?php foreach ($data['$users'] as $user) : ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
        </tr>
    <?php endforeach ?>
</p>