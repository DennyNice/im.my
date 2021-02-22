<?php


namespace core\base\settings;

# Файл настроек путей пример: im.my/iphone6s/cases
class Settings
{
    static private $_instance;

    private $routes = [
        'admin' => [
            'name' => "admin",
            'path' => 'core/admin/controller/',
            #hrURL human readable url означает человеко-читаемые ссылки ссылки ( для админимстратора не важно как будет отображена строка продуктов поэтому значение false)
            'hrURL' => false
        ],
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        'plugins' => [
            'path' => 'core/plugins/',
            #hrURL human readable url означает человеко-читаемые ссылки ссылки
            'hrURL' => false
        ],
        'user' => [
            'path' => 'core/user/controller/',
            #hrURL human readable url означает человеко-читаемые ссылки ссылки ( для пользователя важно отображение строки продуктов поэтому значение true ПРИМЕР: im.my/iphone6s/cases)
            'hrURL' => true,
            'routes' => [

            ]
        ],
        'default' => [
            'controller' => 'indexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'OutputData'
        ]
    ];

    private $templateArr = [

    ];

    # Реализуем шаблон проектирования SINGLETON
    private function __construct()
    {
    }

    function __clone()
    {
    }

    static public function get($property)
    {
        return self::instance()->$property;
    }


    static public function instance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;

        } else {
            return self::$_instance = new self();
        }
    }
}