<?php

namespace Leeroy\GraphQLPlayground\Controllers;

use SailCMS\Contracts\AppController;

class Playground extends AppController
{
    public function loadPlayground(): void
    {
        $this->response->template = 'playground';
    }
}