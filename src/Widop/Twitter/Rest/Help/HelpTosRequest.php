<?php

/*
 * This file is part of the Wid'op package.
 *
 * (c) Wid'op <contact@widop.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Widop\Twitter\Rest\Help;

use Widop\Twitter\Rest\AbstractGetRequest;

/**
 * Help tos request.
 *
 * @link https://dev.twitter.com/docs/api/1.1/get/help/tos
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class HelpTosRequest extends AbstractGetRequest
{
    /**
     * {@inheritdoc}
     */
    protected function getPath()
    {
        return '/help/tos.json';
    }
}
