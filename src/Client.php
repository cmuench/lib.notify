<?php

namespace Cmuench\LibNotify;

use Cmuench\LibNotify\Urgency\Level;

class Client
{
    /**
     * @var Adapter\Adapter
     */
    protected $adapter;

    /**
     * @type string
     */
    const DEFAULT_ADAPTER_CLASS = '\Cmuench\LibNotify\Adapter\NotifySendAdapter';

    public function __construct(Adapter\Adapter $adapter = null)
    {
        if (!$adapter) {
            $adapterClass = self::DEFAULT_ADAPTER_CLASS;
            $this->adapter = new $adapterClass();
        }
    }

    /**
     * @param $message
     * @param Level $urgency default "normal"
     * @param string $iconPath
     * @param string $category
     * @param string $appName
     */
    public function send($message, $urgency = null, $iconPath = null, $category = null, $appName = null)
    {
        if (!$urgency) {
            $urgency = Level::NORMAL();
        }

        $this->adapter
            ->setMessage($message)
            ->setAppName($appName)
            ->setCategory($category)
            ->setUrgency($urgency)
            ->setIcon($iconPath)
            ->send();
    }
}