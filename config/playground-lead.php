<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_LEAD_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_LEAD_LOAD_MIGRATIONS', false),
    ],
];
