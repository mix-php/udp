<?php

namespace Mix\Udp;

use Mix\Component\ComponentInterface;
use Mix\Component\AbstractComponent;
use Mix\Udp\Handler\UdpHandlerInterface;

/**
 * Class Registry
 * @package Mix\Udp
 * @author liu,jian <coder.keda@gmail.com>
 */
class Registry extends AbstractComponent
{

    /**
     * 协程模式
     * @var int
     */
    const COROUTINE_MODE = ComponentInterface::COROUTINE_MODE_REFERENCE;

    /**
     * 处理者
     * @var \Mix\Udp\Handler\UdpHandlerInterface
     */
    public $handler;

    /**
     * 获取处理器
     * @return UdpHandlerInterface
     */
    public function getHandler()
    {
        if (!($this->handler instanceof UdpHandlerInterface)) {
            throw new \RuntimeException("{$handlerClass} type is not 'Mix\Udp\Handler\UdpHandlerInterface'");
        }
        return $this->handler;
    }

}
