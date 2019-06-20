<?php

namespace Mix\Udp;

/**
 * Class Application
 * @package Mix\Udp
 * @author liu,jian <coder.keda@gmail.com>
 */
class Application extends \Mix\Core\Application
{

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
