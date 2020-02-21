<?php

declare(strict_types=1);

/**
 * This file is part of the EmailReplyParser package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace EmailReplyParser;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
final class Fragment
{
    /**
     * @var string
     */
    private $content;

    /**
     * @var bool
     */
    private $isHidden;

    /**
     * @var bool
     */
    private $isSignature;

    /**
     * @var bool
     */
    private $isQuoted;

    /**
     * @param string $content
     * @param bool   $isHidden
     * @param bool   $isSignature
     * @param bool   $isQuoted
     */
    public function __construct($content, $isHidden, $isSignature, $isQuoted)
    {
        $this->content = $content;
        $this->isHidden = $isHidden;
        $this->isSignature = $isSignature;
        $this->isQuoted = $isQuoted;
    }

    public function __toString()
    {
        return $this->getContent();
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        return $this->isHidden;
    }

    /**
     * @return bool
     */
    public function isSignature()
    {
        return $this->isSignature;
    }

    /**
     * @return bool
     */
    public function isQuoted()
    {
        return $this->isQuoted;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return '' === str_replace("\n", '', $this->getContent());
    }
}
