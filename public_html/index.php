<?php

# Определение константы безопасности словом define все остальные константы можно определить через const
define('VG_ACCESS', true);

# В какой кодировке мы будем отправлять данные пользователю
header("Content-Type:text/html;charset=utf-8");

# Старт сессии
session_start();

# В config.php будут хранится базовые настройки необходимые для быстрого развертывания сайта на хостинге
require_once "config.php";

# В internal_settings.php будут хранится более фундаменталтыне настройки например: пути к шаблонам, настройки безапасности сайта
require_once "core/base/settings/internal_settings.php";