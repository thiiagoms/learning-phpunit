<?php

declare(strict_types=1);

namespace Src\Utils;

/**
 * Colors package
 *
 * @package Src\Utils
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
enum Colors
{
    case GREEN;
    case YELLOW;
    case RED;

    /**
     * Return color
     *
     * @return string
     */
    public function color(): string
    {
        return match ($this) {
            Colors::GREEN  => "\e[32m",
            Colors::RED    => "\e[31m",
            Colors::YELLOW => "\e[33m"
        };
    }
}
