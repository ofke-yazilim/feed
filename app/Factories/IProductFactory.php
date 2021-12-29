<?php
/**
 * @author ofarukkesmes
 * @date 29.12.2021
 * @last Modified by ofarukkesmez
 * @last Modified date 29.12.2021
 */

namespace App\Factory;


interface IProductFactory
{
    /**
     * This will Connect to Platforms and call the products method.
     *
     * @return object
     */
    public function products();
}