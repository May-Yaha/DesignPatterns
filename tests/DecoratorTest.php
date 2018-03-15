<?php
/**
 * @package   Yaha\Test
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\Test;


use PHPUnit\Framework\TestCase;
use Yaha\App\Decorator\Behavior\ExtraBed;
use Yaha\App\Decorator\Behavior\RoomBooking;
use Yaha\App\Decorator\Behavior\DoubleRoomBooking;

class DecoratorTest extends TestCase
{

    public $roomBooking;
    public $doubleRoomBooking;

    public function setUp()
    {
        $this->roomBooking       = new RoomBooking();
        $this->doubleRoomBooking = new DoubleRoomBooking();
        parent::setUp();
    }

    /**
     * 预定一个房间价格
     *
     * @test
     */
    public function room_booking_price()
    {

        $this->assertEquals(150, $this->roomBooking->calculatePrice());
    }

    /**
     * 单个房间介绍
     *
     * @test
     */
    public function room_booking_description()
    {
        $this->assertEquals('Room!', $this->roomBooking->getDescription());
    }

    /**
     * 双人预定价格
     *
     * @test
     */
    public function double_room_booking_price()
    {

        $this->assertEquals(300, $this->doubleRoomBooking->calculatePrice());
    }

    /**
     * 双人预定介绍
     *
     * @test
     */
    public function double_room_booking_description()
    {
        $this->assertEquals('Double Room!', $this->doubleRoomBooking->getDescription());
    }

    /**
     * 预定一个房间加床价格
     *
     * @test
     */
    public function extra_room_booking_price()
    {
        $extraRoom = new ExtraBed($this->roomBooking);

        $this->assertEquals(150 + 100, $extraRoom->calculatePrice());
    }

    /**
     * 预定一个房间加多个床价格
     *
     * @test
     */
    public function extra_more_room_booking_price()
    {
        $extraRoom = new ExtraBed($this->roomBooking);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);

        $this->assertEquals(150 + 100 + 100 + 100 + 100 + 100, $extraRoom->calculatePrice());
    }

    /**
     * 预定一个床介绍
     *
     * @test
     */
    public function extra_room_booking_description()
    {
        $extraRoom = new ExtraBed($this->roomBooking);

        $this->assertEquals('Room! Extra Bad!', $extraRoom->getDescription());
    }

    /**
     * 预定多个床介绍
     *
     * @test
     */
    public function extra_more_room_booking_description()
    {
        $extraRoom = new ExtraBed($this->roomBooking);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);

        $this->assertEquals('Room! Extra Bad! Extra Bad! Extra Bad! Extra Bad! Extra Bad!', $extraRoom->getDescription());
    }

    /**
     * @test
     */
    public function extra_double_room_booking_price()
    {

        $extraRoom = new ExtraBed($this->doubleRoomBooking);

        $this->assertEquals(300 + 100, $extraRoom->calculatePrice());
    }

    /**
     * @test
     */
    public function extra_more_double_room_booking_price()
    {

        $extraRoom = new ExtraBed($this->doubleRoomBooking);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);

        $this->assertEquals(300 + 100 + 100 + 100 + 100 + 100, $extraRoom->calculatePrice());
    }

    /**
     * @test
     */
    public function extra_double_room_booking_description()
    {
        $extraRoom = new ExtraBed($this->doubleRoomBooking);

        $this->assertEquals('Double Room! Extra Bad!', $extraRoom->getDescription());
    }

    /**
     * @test
     */
    public function extra_more_double_room_booking_description()
    {
        $extraRoom = new ExtraBed($this->doubleRoomBooking);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);
        $extraRoom = new ExtraBed($extraRoom);

        $this->assertEquals('Double Room! Extra Bad! Extra Bad! Extra Bad! Extra Bad! Extra Bad!', $extraRoom->getDescription());
    }
}