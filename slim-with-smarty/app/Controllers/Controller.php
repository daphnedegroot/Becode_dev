<?php
/**
 * Created by PhpStorm.
 * User: daphnedegroot
 * Date: 2019-07-01
 * Time: 12:46
 */

namespace App\Controllers;

use Interop\Container\ContainerInterface;

class Controller {

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->{$property})
        {
            return $this->container->{$property};
        }
    }
}