<?php

namespace CMuench\LibNotify\Adapter;

use CMuench\LibNotify\Urgency\Level;

abstract class AbstractAdapter
{
    /**
     * @var string
     */
    protected $summary = '';

    /**
     * @var string
     */
    protected $body = '';

    /**
     * @var string
     */
    protected $icon = '';

    /**
     * @var string
     */
    protected $category = '';

    /**
     * @var Level
     */
    protected $urgency = Level::NORMAL;

    /**
     * @var string
     */
    protected $appName = '';

    /**
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

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