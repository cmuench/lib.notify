<?php

namespace Cmuench\LibNotify\Adapter;

use Cmuench\LibNotify\Urgency\Level;

abstract class AbstractAdapter
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var Level
     */
    protected $urgency;

    /**
     * @var string
     */
    protected $appName;

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param Level $level
     * @return $this
     */
    public function setUrgency(Level $level)
    {
        $this->urgency = $level;

        return $this;
    }

    /**
     * @param string $appName
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;

        return $this;
    }
}