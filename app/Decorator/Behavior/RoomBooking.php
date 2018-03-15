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
 * Class RoomBooking
 *
 * @package       Yaha\App\Decorator\Behavior
 *
 * 单人预定
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class RoomBooking implements Booking
{

    /**
     * @return int
     */
    public function calculatePrice()
    {
        return PriceConfig::ROOM_PRICE;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Room!';
    }
}