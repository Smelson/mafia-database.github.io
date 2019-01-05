<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="Мафия, статьи, программы, моддинг, информация"/>
	<meta name="description" content="Главная страница портала — Mafia Database."/>
	<meta name="author" lang="ru" content="Smelson"/>
	<title>Mafia Database</title>
	<link href="images/mafia.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="styles/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
</head>
    <body>
        <center>
            <h1>База данных Mafia: The City of Lost Heaven</h1>
            <?php
            echo "<p>Hello, World!</p>";
             ?>
            <a href="game.html" title="Скачать игру" class="text">Скачать игру</a>
            <br>
            <a href="utilities.html" title="Утилиты для моддинга" class="text">Утилиты для моддинга</a>
            <br>
            <a href="notes.html" title="Заметки по моддингу" class="text">Заметки по моддингу</a>
            <br>
            <a href="articles.html" title="Статьи" class="text">Статьи</a>
            <br>
            <a href="models.html" title="Недоступно!" class="text">Модели</a>
            <br>
            <a href="textures.html" title="Недоступно!" class="text">Текстуры</a>
        </center>
        <script src="js/snow.js"></script>
        <img src="images/tree.png" class="tree_index" onclick="musicFunction()" id="music"/>
        <script>
        var music = new Audio();
        music.src = 'music/jinglebells.mp3'

        function musicFunction() {
            music.play();
        }
        </script>
        <noscript>
            <h1>Ваш браузер не поддерживает JavaScript!</h1>
        </noscript>
    </body>
</html>