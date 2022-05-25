<?php

class Item
{
    private $title;
    private $description;
    private $operation_type;

    function __construct($t, $d, $ot) {
        $this->title = $t;
        $this->description = $d;
        $this->operation_type = $ot;
    }

    function __get($property) {
        $method = "get{$property}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }
}