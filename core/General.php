<?php
/**
 * Created by PhpStorm.
 * User: alexc
 * Date: 25/02/2018
 * Time: 13:24
 */

namespace Framework;


class General
{
    /**
     * @var General
     */
    private static $_instance;

    /**
     * @return General
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new General();
        }
        return self::$_instance;
    }

    /**
     * General constructor.
     */
    public function __construct()
    {
    }
}