<?php
/**
 * @package   App\Strategy\Config
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Yaha\App\Strategy;


use Yaha\App\Strategy\Interfaces\ParserInterface;

class Config
{

    private $parser;

    protected $config;

    public function __construct(ParserInterface $parser)
    {
        $this->setParser($parser);
    }

    public function setParser(ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    public function load($file)
    {
        $this->config = $this->parser->parse($file);

        return $this->config;
    }

    public function get($key)
    {
        $keys = explode('.', $key);

        $config = $this->config;

        foreach ($keys as $key) {

            if (! isset($config[$key])) {
                return [];
            }

            $config = $config[$key];
            continue;
        }

        return $config;
    }
}