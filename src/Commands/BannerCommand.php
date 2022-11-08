<?php

declare(strict_types=1);

namespace Src\Commands;

use Src\Utils\Printer;

/**
 * Main Banner Command
 *
 * @package Src\Commands
 * @author  Thiago Silva <thiago.silva@govoll.com>
 * @version 1.0
 */
class BannerCommand
{
    /**
     * Main Banner command
     *
     * @return void
     */
    public static function init(): void
    {
        Printer::info("
        ██████╗ ██╗  ██╗██████╗ ██╗   ██╗███╗   ██╗██╗████████╗
        ██╔══██╗██║  ██║██╔══██╗██║   ██║████╗  ██║██║╚══██╔══╝
        ██████╔╝███████║██████╔╝██║   ██║██╔██╗ ██║██║   ██║   
        ██╔═══╝ ██╔══██║██╔═══╝ ██║   ██║██║╚██╗██║██║   ██║   
        ██║     ██║  ██║██║     ╚██████╔╝██║ ╚████║██║   ██║   
        ╚═╝     ╚═╝  ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═══╝╚═╝   ╚═╝   
        [*] Learning about phpunit with simple calculator
        ");
    }

    public static function help(): void
    {
    }
}
