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
        $filename = 'log/' . date('d-m-Y\TH.i.s.u') . '.log';
        $filecontent = '';
        foreach ($this -> log as $el)
        {
            echo $el . PHP_EOL;
            $filecontent .= $el . PHP_EOL;
        }

        if(!file_exists('log')) mkdir('log');

        file_put_contents($filename, $filecontent);

    }

    public static function log($str):void
    {
        self::Instance()->log[]=$str;
    }

    public static function write():void
    {
        self::Instance()->_write();
    }
}