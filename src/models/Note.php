<?php

namespace Back\Notas\models;

use Back\Notas\lib\Database;


class Note extends Database{

    private string $uuid;

    public function __construct(private string $title, private string $content)
    {
        parent::__construct();

        $this->uuid = uniqid();
    }

}