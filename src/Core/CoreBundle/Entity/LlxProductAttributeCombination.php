<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductAttributeCombination
 *
 * @ORM\Table(name="llx_product_attribute_combination")
 * @ORM\Entity
 */
class LlxProductAttributeCombination
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_parent", type="integer", nullable=false)
     */
    private $fkProductParent;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_child", type="integer", nullable=false)
     */
    private $fkProductChild;

    /**
     * @var float
     *
     * @ORM\Column(name="variation_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $variationPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="variation_price_percentage", type="integer", nullable=true)
     */
    private $variationPricePercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="variation_weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $variationWeight;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';


}
