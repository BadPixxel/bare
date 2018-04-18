<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCRevenuestamp
 *
 * @ORM\Table(name="llx_c_revenuestamp")
 * @ORM\Entity
 */
class LlxCRevenuestamp
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
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="revenuestamp_type", type="string", length=16, nullable=false, options={"default"="fixed"})
     */
    private $revenuestampType = 'fixed';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=128, nullable=true)
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;


}
