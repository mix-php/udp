<?php

namespace Mix\Udp\Handler;

use Mix\Udp\UdpSender;

/**
 * Interface UdpHandlerInterface
 * @package Mix\Udp\Handler
 * @author LIUJIAN <coder.keda@gmail.com>
 */
interface UdpHandlerInterface
{

    /**
     * 监听数据
     * @param UdpSender $udp
     * @param string $data
     * @param array $clientInfo
     */
    public function packet(UdpSender $udp, string $data, array $clientInfo);

}
