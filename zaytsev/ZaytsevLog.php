<?php


namespace zaytsev;
use core\LogInterface;
use core\LogAbstract;
include 'core\LogAbstract.php';
include 'core\LogInterface.php';

class ZaytsevLog extends LogAbstract implements LogInterface
{

    public function _write()
    {
        foreach ($this -> log as $el)
        {
            echo $el . PHP_EOL;
        }

    }

    public static function log($str)
    {
        self::Instance()->log[]=$str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}