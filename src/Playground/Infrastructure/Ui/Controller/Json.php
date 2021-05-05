<?php

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;

class Json extends Controller
{
    public $is_json = true;

    public function build(): array
    {
        return ['message' => 'This is a JSON answer','back_link' => $this->getUrl('base')];
    }
}
