<?php

namespace GuzabaPlatform\Components\Base\Interfaces;

interface ComponentInterface
{
    public function get_name() : string ;

    /**
     * Returns the installation URL
     * @return string
     */
    public function get_url() : string ;

    public function get_namespace() : string ;
}