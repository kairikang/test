<?php

/*
 * This file is part of the Jaguar package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jaguar\Action\Blur;

use Jaguar\Action\AbstractAction;
use Jaguar\CanvasInterface;
use Jaguar\Action\Convolution;

class BoxBlur extends AbstractAction
{

    /**
     * {@inheritdoc}
     */
    protected function doApply(CanvasInterface $canvas)
    {
        $con = new Convolution(array(
            array(1 / 9, 1 / 9, 1 / 9),
            array(1 / 9, 1 / 9, 1 / 9),
            array(1 / 9, 1 / 9, 1 / 9)
        ));
        $con->apply($canvas);
    }

}
