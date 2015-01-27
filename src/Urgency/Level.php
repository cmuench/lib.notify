<?php

namespace Cmuench\LibNotify\Urgency;

use MyCLabs\Enum\Enum;

class Level extends Enum
{
    const LOW = 'low';
    const NORMAL = 'normal';
    const CRITICAL = 'critical';
}