<?php
declare(strict_types=1);

namespace GuzabaPlatform\Components\Base\Interfaces;


interface InstallationHookInterface
{
    public static function post_installation_hook() : bool ;
}