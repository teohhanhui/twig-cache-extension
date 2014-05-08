<?php

/*
 * This file is part of twig-cache-extension.
 *
 * (c) Alexander <iam.asm89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Asm89\Twig\CacheExtension;

/**
 * Events.
 *
 * @author Teoh Han Hui <teohhanhui@gmail.com>
 */
final class Events
{
    /**
     * The BLOCK_FETCH event occurs when a block is fetched.
     *
     * @var string
     */
    const BLOCK_FETCH = 'asm89_cache.block.fetch';

    /**
     * The BLOCK_SAVE event occurs after a block has been saved.
     *
     * @var string
     */
    const BLOCK_SAVE = 'asm89_cache.block.save';
}
