<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SocialShare\Services;

class Twitter extends Service
{
    public static function getUrl()
    {
        return 'https://twitter.com/intent/tweet?';
    }

    public static function getFields($link, $text, $media)
    {
        return [
            'url'  => $link,
            'text' => $text,
        ];
    }
}
