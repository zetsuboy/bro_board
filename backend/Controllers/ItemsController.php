<?php

class ItemsController {

    function buyAction() {
        $conn = new PDO("mysql:host=localhost;dbname=bro_board", "root", "");
        $repository = new Repository($conn);

        if (isset($_POST['sort'])) {
            $sort = $_POST['sort'];
            $sort_type = $_POST['type'];
        }
        else {
            $sort = NULL;
            $sort_type = NULL;
        }

        $rows = $repository->get_items_buy($sort, $sort_type);

        $items = "";
        $items_template = __DIR__ . '/Templates/ItemTemplate.php';
        while ($row = $rows->fetch()) {
            $items .= template($items_template, $row);
        }
        $buy_page_template = __DIR__ . '/Templates/BuyPageTemplate.php';
        ob_start();
        include $buy_page_template;
        echo ob_get_clean();
    }

    function sellAction() {
        $conn = new PDO("mysql:host=localhost;dbname=bro_board", "root", "");
        $repository = new Repository($conn);

        if (isset($_POST['sort'])) {
            $sort = $_POST['sort'];
            $sort_type = $_POST['type'];
        }
        else {
            $sort = NULL;
            $sort_type = NULL;
        }

        $rows = $repository->get_items_sell($sort, $sort_type);

        $items = "";
        $items_template = __DIR__ . '/Templates/ItemTemplate.php';
        while ($row = $rows->fetch()) {
            $items .= template($items_template, $row);
        }
        $buy_page_template = __DIR__ . '/Templates/BuyPageTemplate.php';
        ob_start();
        include $buy_page_template;
        echo ob_get_clean();
    }

    function addAction() {
        $add_page_template = __DIR__ . '/Templates/AddItemPageTemplate.php';
        ob_start();
        include $add_page_template;
        echo ob_get_clean();
    }
}