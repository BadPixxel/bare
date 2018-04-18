<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCTva
 *
 * @ORM\Table(name="llx_c_tva", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_tva_id", columns={"fk_pays", "code", "taux", "recuperableonly"})})
 * @ORM\Entity
 */
class LlxCTva
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
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=true)
     */
    private $code = '';

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1", type="string", length=20, nullable=false)
     */
    private $localtax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=false)
     */
    private $localtax1Type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2", type="string", length=20, nullable=false)
     */
    private $localtax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=false)
     */
    private $localtax2Type = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recuperableonly", type="integer", nullable=false)
     */
    private $recuperableonly = '0';

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
