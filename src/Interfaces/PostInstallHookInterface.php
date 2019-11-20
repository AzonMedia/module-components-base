<?php
declare(strict_types=1);

namespace GuzabaPlatform\Components\Base\Interfaces;

use Composer\Installer\PackageEvent;

interface PostInstallHookInterface
{
    public static function post_installation_hook(PackageEvent $PackageEvent) : bool ;
}