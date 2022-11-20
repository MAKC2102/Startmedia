<?php

//общая модель
class Model
{

    protected $db = null;

    //подключение к импровизированной БД
    public function __construct() {

        $this->db = DB::connToDB();

    }

}