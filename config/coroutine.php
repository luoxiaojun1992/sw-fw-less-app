<?php

return [
    'enable_preemptive_scheduler' => \SwFwLess\components\functions\envInt('COROUTINE_PREEMPTIVE_SCHEDULER', 0),
    'hook_flags' => SWOOLE_HOOK_ALL,
];
