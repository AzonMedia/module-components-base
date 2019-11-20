<?php
declare(strict_types=1);

namespace GuzabaPlatform\Components\Base\Interfaces;

interface ComponentInterface
{
    public static function get_name() : string ;

    /**
     * Returns the installation URL
     * @return string
     */
    public static function get_url() : string ;

    public static function get_namespace() : string ;

    public static function get_version() : string ;


    public static function get_vendor_name() : string ;

    public static function get_vendor_url() : string ;
}