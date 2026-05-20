<?php

declare(strict_types=1);

/*
 * This file is part of the SensioLabs MinifyBundle package.
 *
 * (c) Simon André - Sensiolabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensiolabs\MinifyBundle\Minifier;

/**
 * @author Simon André <smn.andre@gmail.com>
 */
interface MinifierInterface
{
    public const TYPE_CSS = 'css';
    public const TYPE_JS = 'js';
    public const TYPE_HTML = 'html';

    /**
     * @param self::TYPE_CSS|self::TYPE_JS|self::TYPE_HTML $type
     */
    public function minify(string $input, string $type/* , ?\Sensiolabs\MinifyBundle\Minifier\Options\OptionsInterface $options = null */): string;
}
