<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 9/14/18
 * Time: 12:23 AM
 */

namespace AppBundle\Repository;


use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;
use Sylius\Component\Channel\Model\ChannelInterface;

class ProductRepository extends BaseProductRepository
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function findByOnHand($limit = 8)
    {
        return $this->createQueryBuilder('o')
            ->addSelect('variant')
            ->addSelect('translation')
            ->leftJoin('o.variants', 'variant')
            ->leftJoin('o.translations', 'translation')
            ->addOrderBy('variant.onHand', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function findLatestByChannelAndTaxonCode(ChannelInterface $channel, $code, $count)
    {
        return $this->createQueryBuilder('o')
            ->innerJoin('o.channels', 'channel')
            ->andWhere('o.enabled = true')
            ->andWhere('channel = :channel')
            ->innerJoin('o.productTaxons', 'productTaxons')
            ->addOrderBy('productTaxons.position', 'asc')
            ->innerJoin('productTaxons.taxon', 'taxon')
            ->andWhere('taxon.code = :code')
            ->setParameter('code', $code)
            ->setParameter('channel', $channel)
            ->setMaxResults($count)
            ->getQuery()
            ->getResult();
    }
}