<?php

namespace Mix\Udp;

use Mix\Core\Bean\AbstractObject;

/**
 * Class ClientInfo
 * @package Mix\Udp
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class ClientInfo extends AbstractObject
{

    /**
     * ip地址
     * @var string
     */
    public $ip;

    /**
     * 端口
     * @var int
     */
    public $port;

}
