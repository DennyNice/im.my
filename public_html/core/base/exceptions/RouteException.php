<?php


namespace core\base\exceptions;

# Дочерний класс обработки исключений должен обязательно наследовать базовый класс обработки исключений \Exception
# \ нужна перед Exception для того что бы сказать интерпретатору искать класс /Exception в глобальном пространстве имен
class RouteException extends \Exception
{

}