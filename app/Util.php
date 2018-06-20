<?php

namespace Jwechat;

class Util
{
    /**
     * 打印某个变量到storage/logs/debug.log
     * @param mixed array|object 
     * @param  string $path 保存路径
     * @return void
     */
    public static function debug($data) 
    {
        $fp = fopen(sprintf('%s/logs/debug_%s.log', BASE_PATH, time()), 'a+');

        if (is_array($data)) {
            $data = print_r($data, true);
        }

        fwrite($fp, $data);
        fclose($fp);
    }
}