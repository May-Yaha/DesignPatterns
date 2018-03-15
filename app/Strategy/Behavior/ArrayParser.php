<?php
/**
 * @package   Yaha\Project\Strategy\App\Config\Parser
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Strategy\Behavior;

use Yaha\App\Strategy\Interfaces\ParserInterface;

class ArrayParser implements ParserInterface
{

    public function parse($file)
    {
        return require $file;
    }
}