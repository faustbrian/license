<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\License\Data;

final readonly class Holder
{
    public function __construct(
        private string $name,
        private string $mail,
    ) {
        //
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMail(): string
    {
        return $this->mail;
    }
}
