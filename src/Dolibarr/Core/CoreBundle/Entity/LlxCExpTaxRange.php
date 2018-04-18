<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCExpTaxRange
 *
 * @ORM\Table(name="llx_c_exp_tax_range")
 * @ORM\Entity
 */
class LlxCExpTaxRange
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
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkCExpTaxCat = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="range_ik", type="float", precision=10, scale=0, nullable=false)
     */
    private $rangeIk = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
