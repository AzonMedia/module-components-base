<?php

namespace GuzabaPlatform\Components\Base\Traits;

use Composer\Installer\PackageEvent;

trait PostInstallHookTrait
{
    public static function post_installation_hook(PackageEvent $PackageEvent) : bool
    {
        print 'post hoooook';
    }
}