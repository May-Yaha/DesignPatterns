<?php
/**
 * @package   Yaha\Project\Strategy\App\Config\Parser
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Strategy\Behavior;


use Yaha\App\Strategy\Interfaces\ParserInterface;

class JsonParser implements ParserInterface
{

    public function parse($file)
    {

        return json_decode(file_get_contents($file), true);
    }
}