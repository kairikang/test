<?php

/*
 * This file is part of the Jaguar package.
 *
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jaguar\Tests\Mock;

use Jaguar\Format\Png;

class PngCanvasMock extends Png
{
    public function isHandlerSet()
    {
        return true;
    }

    public function getHandler()
    {
        return true;
    }

    public function getWidth()
    {
        return 100;
    }

    public function getHeight()
    {
        return 100;
    }

    public function alphaBlending($bool)
    {
        return $this;
    }

    protected function doLoadFromFile($file)
    {
        return null;
    }

    protected function getToStringProperties()
    {
        return array();
    }

}
