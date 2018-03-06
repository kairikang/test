<?php

/*
 * This file is part of the Jaguar package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jaguar\Tests\Drawable\Text;

use Jaguar\Drawable\Text\Plain;

class PlainTest extends AbstractTextDrawerTest
{

    public function getDrawer()
    {
        return new Plain(null, 2);
    }

}
