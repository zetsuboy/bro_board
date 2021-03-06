<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/backend/Controllers/Templates/css/css.css">
    <title>Доска Объявлений - купить</title>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>
<body>
<div class="background">
    <div class="feed">
        <div class="feed_head">
            <a id="feed_head_title">Объявления о продаже</a>
            <a class="redirect" href="buy"><b>Покупка</b></a>
            <a class="redirect" href="sell"><b>Продажа</b></a>
            <a class="redirect" href="add"><b>Оставить объявление</b></a>
        </div>
        <div class="feed_content_head">
            <span id="title">Название</span>
            <span id="desc">Описание</span>
        </div>
        <div class="sort">
            <span>Сортировка: </span>
            <a href="" id="sort_desc">DESC</a>
            <a href="" id="sort_asc">ASC</a>
        </div>
        <div class="feed_content">
            <?php print $items; ?>
        </div>
    </div>
</div>
<script src="javascript/sort_buy.js"></script>
</body>
</html>