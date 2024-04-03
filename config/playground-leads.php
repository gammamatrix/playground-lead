<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_LEADS_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_LEADS_LOAD_MIGRATIONS', false),
    ],
];
