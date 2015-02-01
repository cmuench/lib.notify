<?php

namespace CMuench\LibNotify;

use CMuench\LibNotify\Urgency\Level;

class Client
{
    /**
     * @var Adapter\Adapter
     */
    protected $adapter;

    /**
     * @type string
     */
    const DEFAULT_ADAPTER_CLASS = '\CMuench\LibNotify\Adapter\NotifySendAdapter';

    public function __construct(Adapter\Adapter $adapter = null)
    {
        $this->adapter = $adapter;

        if (!$this->adapter) {
            $adapterClass = self::DEFAULT_ADAPTER_CLASS;
            $this->adapter = new $adapterClass();
        }
    }

    /**
     * @param string $summary
     * @param string $body
     * @param Level $urgency default "normal"
     * @param string $iconPath
     * @param string $category
     * @param string $appName
     */
    public function send($body, $summary = '', $urgency = '', $iconPath = '', $category = '', $appName = '')
    {
        if (!$urgency) {
            $urgency = Level::NORMAL();
        }

        $this->adapter
            ->setSummary($summary)
            ->setBody($body)
            ->setAppName($appName)
            ->setCategory($category)
            ->setUrgency($urgency)
            ->setIcon($iconPath)
            ->send();
    }
}