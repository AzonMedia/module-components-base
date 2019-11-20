<?php

namespace GuzabaPlatform\Components\Base\Traits;

trait ComponentTrait
{
    public static function get_name(): string
    {
        return self::COMPONENT_NAME;
    }

    /**
     * Returns the installation URL
     * @return string
     */
    public static function get_url(): string
    {
        return self::COMPONENT_URL;
    }

    public static function get_namespace(): string
    {
        return self::COMPONENT_NAMESPACE;
    }

    public static function get_version(): string
    {
        return self::COMPONENT_VERSION;
    }

    public static function get_vendor_name(): string
    {
        return self::VENDOR_NAME;
    }

    public static function get_vendor_url(): string
    {
        return self::VENDOR_URL;
    }
}