<?php

use App\Controllers\Controller;
use App\Controllers\AboutController;

return [
    ['GET', '/', [Controller::class, 'sayHello']],
    ['GET', '/about', [AboutController::class, 'index']],
];