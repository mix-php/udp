<?php

namespace Mix\Udp;

use Mix\Core\Application\ComponentInitializeTrait;

/**
 * Class Application
 * @package Mix\Udp
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class Application extends \Mix\Core\Application
{

    use ComponentInitializeTrait;

    /**
     * 执行监听数据
     * @param $udp
     * @param $data
     * @param $clientInfo
     */
    public function runPacket($udp, $data, $clientInfo)
    {
        $handler = \Mix::$app->registry->getHandler();
        $handler->packet($udp, $data, $clientInfo);
    }

}
