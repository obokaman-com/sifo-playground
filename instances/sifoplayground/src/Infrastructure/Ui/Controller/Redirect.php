<?php

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;
use Sifo\Exception_301;
use Sifo\Exception_302;
use Sifo\FilterGet;

class Redirect extends Controller
{
    /**
     * @throws Exception_301
     * @throws Exception_302
     */
    public function build()
    {
        $redirect_code = (int)FilterGet::getInstance()->getString('code');

        if (301 === $redirect_code) {
            throw new Exception_301($this->getUrl('base'));
        }

        throw new Exception_302($this->getUrl('base'));
    }
}