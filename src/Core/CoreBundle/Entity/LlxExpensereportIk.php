<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpensereportIk
 *
 * @ORM\Table(name="llx_expensereport_ik")
 * @ORM\Entity
 */
class LlxExpensereportIk
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=false)
     */
    private $fkCExpTaxCat = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_range", type="integer", nullable=false)
     */
    private $fkRange = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="coef", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ikoffset", type="float", precision=10, scale=0, nullable=false)
     */
    private $ikoffset = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"="1"})
     */
    private $active = '1';


}
