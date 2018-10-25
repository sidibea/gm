<?php

/*
 * This file is part of catalog promotion plugin for Sylius.
 *
 * (c) Ahmed Kooli
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\SnakeTn\CatalogPromotion\Promotion\Checker\Rule;

use SnakeTn\CatalogPromotion\Promotion\Checker\Rule\HasTaxonRuleChecker;
use PHPUnit\Framework\TestCase;
use Sylius\Component\Core\Model\Product;
use Sylius\Component\Core\Model\ProductTaxon;
use Sylius\Component\Core\Model\ProductVariant;
use Sylius\Component\Core\Model\Taxon;
use SnakeTn\CatalogPromotion\Entity\PromotionRule;

class HasTaxonRuleCheckerTest extends TestCase
{
    /**
     * @var PromotionRule
     */
    private $promotionRule;

    /**
     * @var ProductVariant
     */
    private $productVariant;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Product
     */
    private $productTaxon;

    public function setUp()
    {
        $taxon = new Taxon();
        $taxon->setCode('taxon_code');

        $this->productTaxon = new ProductTaxon();
        $this->productTaxon->setTaxon($taxon);


        $this->product = new Product();

        $this->product->addProductTaxon($this->productTaxon);

        $this->productVariant = new ProductVariant();
        $this->productVariant->setProduct($this->product);

        $this->promotionRule = new PromotionRule();
    }

    public function test_case_eligible()
    {
        $this->promotionRule->setConfiguration(['taxons' => ['taxon_code']]);
        $hasTaxonRuleChecker = new HasTaxonRuleChecker();
        $this->assertTrue($hasTaxonRuleChecker->isEligible($this->productVariant, $this->promotionRule));
    }

    public function test_case_not_eligible()
    {
        $this->promotionRule->setConfiguration(['taxons' => ['unexistent_taxon_code']]);
        $hasTaxonRuleChecker = new HasTaxonRuleChecker();
        $this->assertFalse($hasTaxonRuleChecker->isEligible($this->productVariant, $this->promotionRule));
    }

    public function test_case_product_not_attatched_to_any_taxon()
    {
        $this->promotionRule->setConfiguration(['taxons' => ['taxon_code']]);
        $this->product->removeProductTaxon($this->productTaxon);
        $hasTaxonRuleChecker = new HasTaxonRuleChecker();
        $this->assertFalse($hasTaxonRuleChecker->isEligible($this->productVariant, $this->promotionRule));
    }


}
