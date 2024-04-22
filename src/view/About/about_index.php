<head>
    <title>Пример HTML Страницы</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin-top: 0;
        }
        nav {
            background-color: #444;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Пример HTML Страницы</h1>
</header>

<nav>
    <ul>
        <li><a href="/home">Главная</a></li>
        <li><a href="/about/page">О нас</a></li>
        <li><a href="/gallery">Кот</a></li>
    </ul>
</nav>
<tr>
    <th>first_name</th>
    <th>second_name</th>
    <th>login</th>
    <th>password</th>
    <th>email</th>
</tr>
<form method="post">
    <input name="first_name">
    <input name="second_name">
    <input name="login">
    <input name="pass">
    <input name="email">
    <input type="submit" name="save">
</form>