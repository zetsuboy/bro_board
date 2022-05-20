<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css.css">
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
                <a class="redirect" href="buy.php"><b>Покупка</b></a>
                <a class="redirect" href="sell.php"><b>Продажа</b></a>
                <a class="redirect" href="add_item.php"><b>Оставить объявление</b></a>
            </div>
            <div class="feed_content_head">
                <span id="title">Название</span>
                <span id="desc">Описание</span>
            </div>
            <div class="feed_content">
             <?php include 'backend/get_items_buy.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>