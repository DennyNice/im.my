<?php

# если константа установлена то выполянем код если нет то завершаем работу скрипта с сообщением (Access denied)
defined('VG_ACCESS') or die("Access denied");

# Адресс сайта
const SITE_URL = "http://im.my";
# Корень пути нашего сайта
const PATH = "/";

# 4 Константы подлючения к базе данных
const HOST = "localhost";
# По умолчанию имя пользователя это root
const USER = "root";
# По умолчанию пароль пользователя это тоже root
const PASS = "root";
# Имя Базы данных
const DB_NAME = "im";