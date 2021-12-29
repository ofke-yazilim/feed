<?php
/**
 * @author ofarukkesmes
 * @date 29.12.2021
 * @last Modified by ofarukkesmez
 * @last Modified date 29.12.2021
 */

namespace App\Platform;


interface IPlatform
{
    /**
     * Get all products from products.json
     *
     * @return array
     */
    public function products();
}