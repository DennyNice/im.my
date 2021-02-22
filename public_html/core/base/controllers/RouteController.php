<?php

namespace core\base\controllers;

use core\base\settings\Settings;


class RouteController
{
    static private $_instance;

    private function __clone()
    {

    }

    # self означает что мы ссылаемся на наш собственный класс
    # Реализация шаблона проектирования SINGLETON уберигам себя от утечек памяти, снимаем нагрузку с сервера mysql
    # Это используем на примере адрессной строки на не нужно для одной адрессной строки что бы 15 разных обьектов ее обрабатывали которые будут делать одно и тоже
    static public function getInstance()
    {
        # Мы проверяем хранится ли в свойтве $_instance обьект нашего класса в котором мы рабоатем
        # Если да то мы вернем это свойство self::$_instance
        # Если нету обьекта нашего класса мы вернем self::$_instance предварительно в котором запишем новый обьект нашего класса self::$_instance = new self;
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    private function __construct()
    {
       $s = Settings::get('routes');
$s1 =Settings::get('property1');
        exit();
    }

}