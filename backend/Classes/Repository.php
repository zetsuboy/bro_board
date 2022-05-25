<?php

class Repository
{
    private PDO $pdo;

    function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function get_items_buy($sort = NULL, $type = NULL) {
        $sql = "SELECT * FROM items WHERE operation = 'Продать'" . $type;
        if ($sort != NULL) {
            $sql .= " ORDER BY date " . $type;
        }
        $result = $this->pdo->prepare($sql);
        $result->execute();
        return $result;
    }

    public function get_items_sell($sort = NULL, $type = NULL) {
        $sql = "SELECT * FROM items WHERE operation = 'Купить'" . $type;
        if ($sort != NULL) {
            $sql .= " ORDER BY date " . $type;
        }
        $result = $this->pdo->prepare($sql);
        $result->execute();
        return $result;
    }

    public function add_to_database(Item $item) {
        $sql = "INSERT INTO items (title, description, operation) VALUES (:title, :desc, :operation)";
        $result = $this->pdo->prepare($sql);
        $result->execute(array(":title" => $item->title, ":desc" => $item->description, ":operation" => $item->operation));
        return $result;
    }
}