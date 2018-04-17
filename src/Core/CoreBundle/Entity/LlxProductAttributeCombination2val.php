<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductAttributeCombination2val
 *
 * @ORM\Table(name="llx_product_attribute_combination2val")
 * @ORM\Entity
 */
class LlxProductAttributeCombination2val
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
     * @ORM\Column(name="fk_prod_combination", type="integer", nullable=false)
     */
    private $fkProdCombination;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_prod_attr", type="integer", nullable=false)
     */
    private $fkProdAttr;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_prod_attr_val", type="integer", nullable=false)
     */
    private $fkProdAttrVal;


}
