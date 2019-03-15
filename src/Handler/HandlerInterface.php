<?php

namespace Mix\Udp\Handler;

use Mix\Udp\ClientInfo;
use Mix\Udp\UdpSender;

/**
 * Interface HandlerInterface
 * @package Mix\Udp\Handler
 * @author LIUJIAN <coder.keda@gmail.com>
 */
interface HandlerInterface
{

    /**
     * 监听数据
     * @param UdpSender $udp
     * @param string $data
     * @param ClientInfo $clientInfo
     */
    public function packet(UdpSender $udp, string $data, ClientInfo $clientInfo);

}
