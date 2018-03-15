<?php
/**
 * @package   Yaha\App\Decorator\Behavior
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Decorator\Behavior;


use Yaha\App\Decorator\Config\PriceConfig;
use Yaha\App\Decorator\Interfaces\Booking;

/**
 * Class DoubleRoomBooking
 *
 * @package       Yaha\App\Decorator\Behavior
 *
 * 双人预定
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class DoubleRoomBooking implements Booking
{

    /**
     * 双人预定价格
     *
     * @return int
     */
    public function calculatePrice()
    {
        return PriceConfig::DOUBLE_ROOM_PRICE;
    }

    /**
     * 预定介绍
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Double Room!';
    }
}