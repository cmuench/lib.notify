<?php

namespace CMuench\LibNotify\Adapter;

use Symfony\Component\Process\ProcessBuilder;

class NotifySendAdapter extends AbstractAdapter implements Adapter
{
    /**
     * @return bool
     */
    public function send()
    {
        $processBuilder = ProcessBuilder::create();
        $processBuilder->setPrefix('/usr/bin/env');
        $processBuilder->add('notify-send');

        if ($this->urgency) {
            $processBuilder->add('--urgency=' . $this->urgency->getValue());
        }

        if ($this->icon) {
            $processBuilder->add('--icon=' . $this->icon);
        }

        if ($this->category) {
            $processBuilder->add('--category=' . $this->category);
        }

        if ($this->appName) {
            $processBuilder->add('--app-name=' . $this->appName);
        }

        $processBuilder->add($this->summary);
        $processBuilder->add($this->body);

        if ($processBuilder->getProcess()->run() == 0) {
            return true;
        }

        return false;
    }
}