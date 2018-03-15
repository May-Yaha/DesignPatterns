<?php
/**
 * @package   Yaha\App\Decorator\Behavior
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Decorator\Behavior;


use Yaha\App\Decorator\Abstracts\BookingDecorator;
use Yaha\App\Decorator\Config\PriceConfig;

/**
 * Class ExtraBed
 *
 * @package       Yaha\App\Decorator\Behavior
 *
 * 加床预定
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ExtraBed extends BookingDecorator
{

    /**
     * @return int
     */
    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + PriceConfig::EXTRA_BED_PRICE;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->booking->getDescription() . ' Extra Bad!';
    }
}