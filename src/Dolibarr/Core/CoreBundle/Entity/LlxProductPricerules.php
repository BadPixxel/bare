<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductPricerules
 *
 * @ORM\Table(name="llx_product_pricerules", uniqueConstraints={@ORM\UniqueConstraint(name="unique_level", columns={"level"})})
 * @ORM\Entity
 */
class LlxProductPricerules
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
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_level", type="integer", nullable=false)
     */
    private $fkLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="var_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $varPercent;

    /**
     * @var float
     *
     * @ORM\Column(name="var_min_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $varMinPercent;


}
