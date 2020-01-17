<?php
declare(strict_types=1);

namespace GuzabaPlatform\Components\Base\Traits;

use Guzaba2\Kernel\SourceStream;

trait ComponentTrait
{
    public static function get_name() : string
    {
        return self::COMPONENT_NAME;
    }

    /**
     * Returns the installation URL
     * @return string
     */
    public static function get_url() : string
    {
        return self::COMPONENT_URL;
    }

    /**
     * Returns the PHP namespace of the component
     * @return string
     */
    public static function get_namespace() : string
    {
        return self::COMPONENT_NAMESPACE;
    }

    public static function get_version() : string
    {
        return self::COMPONENT_VERSION;
    }

    public static function get_vendor_name() : string
    {
        return self::VENDOR_NAME;
    }

    public static function get_vendor_url() : string
    {
        return self::VENDOR_URL;
    }

    public static function get_error_reference_url() : string
    {
        return self::ERROR_REFERENCE_URL;
    }

    public static function get_composer_file() : string
    {
        $ret = '';
        //todo improve this
        //go up until composer.json is found
        $called_class = get_called_class();
        $component_file = (new \ReflectionClass($called_class))->getFileName();
        $component_file = str_replace(SourceStream::PROTOCOL.'://', '', $component_file);
        $path = $component_file;
        do {
            $path = dirname($path);
            $file = $path.'/composer.json';
            if (file_exists($file) && is_readable($file)) {
                $ret = $file;
                break;
            }
        } while ($path !== '/');
        return $ret;
    }

    public static function get_composer_package_name() : string
    {
        $ret = '';
        $composer_file = self::get_composer_file();
        if ($composer_file) {
            $json = json_decode(file_get_contents($composer_file));
            $ret = $json->name ?? $ret;
        }

        return $ret;
    }
}