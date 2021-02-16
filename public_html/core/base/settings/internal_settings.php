<?php

defined("VG_ACCESS") or die("Access denied");

# В этой константе будут хранится шаблоны пользовательской части нашего сайта
const TEMPLATE = "templates/default/";

# В этой константе будут хранится шаблоны административной панели (админки) нашего сайта
const ADMIN_TEMPLATE = "core/admin/views";

# Эта константа отвечает за безопасность
# Нужна она для того что бы мы могли заставить пользователей специально перелогинится на наш сайт путем замены версии cookie файла
const COOKIE_VERSION = "1.0.0";

# Эта константа хранить ключ шифрования для cookie файлов
const CRYPT_KEY = "";

# Эта константа отвечает за время бездействия администартора (логика: если в течениии 60 минут администратор (менеджер) ничего не делает то ему придется  авторизироватся заново)
const COOKIE_TIME = 60;

# Эта константа отвечает за защиту от перебора пароля (в нашем случае блокировка 3 минуты)
const BLOCK_TIME = 3;

# Эта константа отвечает за построение постраничной навигации
# По умолчанию будем отображать 8 товаров на странице товара
const QTY = 8;

# Эта константа отвечает за количество ссылок на странице товара
const QTY_LINKS = 3;

# В этой константе будут хранится пути к css и js файлам необходимым для работы админ панели сайта
const ADMIN_CSS_JS = [
    "styles" => [],
    "scripts" => []
];

# В этой константе будут хранится пути к css и js файлам необходимым для работы пользовательской части сайта
const USER_CSS_JS = [
    "styles" => [],
    "scripts" => []
];

# Импортируем пространство имен
use core\base\exceptions\RouteException;

# Функция для загрузчика spl_autoload_register в него передаем название нашей функции (autoloadMainCLasses)
function autoloadMainCLasses($class_name)
{
    # Происходит экранирование строк для того что бы php смог отсканировать нужный путь в директориях
    $class_name = str_replace("\\", "/", $class_name);

    # @ это знак перед include_once блокирует вывод в браузере ошибок и warnings
    if (@!include_once $class_name . ".php") {
        throw new RouteException("Не верное имя файла для подключения - " . $class_name);
    }
}

# Загрузчик классов spl_autoload_register (он всегда регистрирует очередь какая функция стоит раньше та и будет первой)
spl_autoload_register("autoloadMainCLasses");


