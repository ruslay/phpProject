<?php

use App\Controllers\Controller;
use App\Controllers\AboutController;

return [
    ['GET', '/', [Controller::class, 'index']],
    ['GET', '/about', [AboutController::class, 'index']],
];