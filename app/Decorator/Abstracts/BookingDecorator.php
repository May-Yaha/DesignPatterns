<?php
/**
 * @package   Yaha\App\Decorator\Abstracts
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Decorator\Abstracts;

use Yaha\App\Decorator\Interfaces\Booking;


abstract class BookingDecorator implements Booking
{
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}