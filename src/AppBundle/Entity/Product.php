<?php
// src/AppBundle/Entity/Product.php

declare(strict_types=1);

namespace AppBundle\Entity;

use Loevgaard\SyliusBrandPlugin\Entity\BrandAwareInterface;
use Loevgaard\SyliusBrandPlugin\Entity\ProductTrait;
use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements BrandAwareInterface
{
    use ProductTrait;


}