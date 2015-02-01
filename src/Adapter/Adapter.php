<?php

namespace CMuench\LibNotify\Adapter;

use CMuench\LibNotify\Urgency\Level;

interface Adapter
{
    /**
     * @return bool
     */
    public function send();

    /**
     * @param $summary
     * @return $this
     */
    public function setSummary($summary);

    /**
     * @param string $body
     * @return $this
     */
    public function setBody($body);

    /**
     * @param string $appName
     * @return $this
     */
    public function setAppName($appName);

    /**
     * @return string $iconPath
     * @return $this
     */
    public function setIcon($iconPath);

    /**
     * @param string $category
     * @return $this
     */
    public function setCategory($category);

    /**
     * @param Level $level
     * @return $this
     */
    public function setUrgency(Level $level);
}