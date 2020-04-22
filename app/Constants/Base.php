<?php
/**
 * Created by PhpStorm.
 * User: Adminis
 * Date: 2019/5/16
 * Time: 10:02
 */

namespace App\Constants;


abstract class Base
{
    /**
     * 获取子类所有常量组成的数组
     *
     */
    public static function getAllConstants()
    {
        $objClass = new \ReflectionClass(get_called_class());
        $allConstants = $objClass->getConstants();
        return array_values($allConstants);
    }
}
