<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxLoan
 *
 * @ORM\Table(name="llx_loan")
 * @ORM\Entity
 */
class LlxLoan
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=80, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var float
     *
     * @ORM\Column(name="capital", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $capital = '0.00000000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datestart", type="date", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateend", type="date", nullable=true)
     */
    private $dateend;

    /**
     * @var float|null
     *
     * @ORM\Column(name="nbterm", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbterm;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="capital_position", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $capitalPosition = '0.00000000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_position", type="date", nullable=true)
     */
    private $datePosition;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="smallint", nullable=false)
     */
    private $paid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_capital", type="string", length=32, nullable=true)
     */
    private $accountancyAccountCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_insurance", type="string", length=32, nullable=true)
     */
    private $accountancyAccountInsurance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_interest", type="string", length=32, nullable=true)
     */
    private $accountancyAccountInterest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
