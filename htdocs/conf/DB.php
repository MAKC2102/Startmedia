<?php

//тут должно быть подключение к базу данных, но по условиям задачи беру данные из json файлов
class DB
{

    const attempts = __DIR__ . '/data_attempts.json';
    const cars = __DIR__ . '/data_cars.json';

    public static function connToDB()
    {

        $attemptsDB = self::attempts;
        $carsDB = self::cars;

        return [
            "attempts" => file_get_contents($attemptsDB),
            "cars" => file_get_contents($carsDB)
        ];

    }

}