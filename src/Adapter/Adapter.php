<?php

namespace Cmuench\LibNotify\Adapter;

use Cmuench\LibNotify\Urgency\Level;

interface Adapter
{
    /**
     * @return bool
     */
    public function send();

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

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