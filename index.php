<?php
/**
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

$a = '{
  "mysql" : {
    "host" : "127.0.0.1",
    "username":"root",
    "password":"123456"
  }
}';

var_dump(json_decode($a,true));