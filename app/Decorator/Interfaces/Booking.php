<?php
/**
 * @package   Yaha\App\Decorator\Interfaces
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Decorator\Interfaces;

/**
 * Interface Book
 *
 * @package Yaha\App\Decorator\Interfaces
 */
interface Booking
{

    /**
     * 计算价格
     *
     * @return mixed
     */
    public function calculatePrice();

    /**
     * 获取描述
     *
     * @return mixed
     */
    public function getDescription();
}