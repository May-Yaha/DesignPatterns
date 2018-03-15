<?php
/**
 * @package   Yaha\Test
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\Test;


use PHPUnit\Framework\TestCase;
use Yaha\App\Strategy\Config;
use Yaha\App\Strategy\Behavior\JsonParser;
use Yaha\App\Strategy\Behavior\ArrayParser;

/**
 * Class StrategyTest
 *
 * @package       Yaha\Test
 *
 * 战略模式单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class StrategyTest extends TestCase
{

    private $arrayConfigObj;
    private $jsonConfigObj;

    private $arrayConfig;
    private $jsonConfig;

    public function setUp()
    {
        $this->arrayConfigObj = new Config(new ArrayParser());
        $this->jsonConfigObj  = new Config(new JsonParser());

        $this->arrayConfig = $this->arrayConfigObj->load('/data/code/php/DesignPatterns/app/Strategy/Config/database.php');
        $this->jsonConfig  = $this->jsonConfigObj->load('/data/code/php/DesignPatterns/app/Strategy/Config/database.json');

        parent::setUp();
    }

    /**
     * @test
     */
    public function get_array_config()
    {
        $this->equals_result($this->arrayConfig);
    }

    /**
     * @test
     */
    public function get_json_config()
    {
        $this->equals_result($this->jsonConfig);
    }

    private function equals_result($resultConfig)
    {
        $this->assertEquals([
            'mysql' => [
                'host'     => '127.0.0.1',
                'username' => 'root',
                'password' => '123456'
            ]
        ], $resultConfig);
    }

    /**
     * @test
     */
    public function get_mysql_host()
    {
        $host = $this->arrayConfigObj->get('mysql.host');

        $this->assertEquals('127.0.0.1', $host);
    }
}