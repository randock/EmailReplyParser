<?php

declare(strict_types=1);

/**
 * This file is part of the EmailReplyParser package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace EmailReplyParser\Parser;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
class FragmentDTO
{
    /**
     * @var string[]
     */
    public $lines = [];

    /**
     * @var bool
     */
    public $isHidden = false;

    /**
     * @var bool
     */
    public $isSignature = false;

    /**
     * @var bool
     */
    public $isQuoted = false;
}
