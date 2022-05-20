<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css.css">
    <title>Доска Объявлений - добавить</title>
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
        <form class="item_form">
            <div class="form_title" >
                <b>Название предмета:</b>
                <input type="text" name="item_title">
            </div>
            <div class="form_description">
                <b>Описание предмета:</b>
                <input type="text" name="item_description">
            </div>
            <div class="form_type">
                <b>Тип операции:</b>
                <select size="1" name="item_operation">
                    <option value="Продать">Продать</option>
                    <option value="Купить">Купить</option>
                </select>
            </div>
            <input type="submit" value="Создать"></input>
        </form>
    </div>
</div>
<script src="javascript/add_item.js"></script>
</body>
</html>