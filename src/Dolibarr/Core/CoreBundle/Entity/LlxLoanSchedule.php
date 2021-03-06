<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxLoanSchedule
 *
 * @ORM\Table(name="llx_loan_schedule")
 * @ORM\Entity
 */
class LlxLoanSchedule
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
     * @var int|null
     *
     * @ORM\Column(name="fk_loan", type="integer", nullable=true)
     */
    private $fkLoan;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep", type="datetime", nullable=true)
     */
    private $datep;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_capital", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountCapital = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_insurance", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountInsurance = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_interest", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountInterest = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_typepayment", type="integer", nullable=false)
     */
    private $fkTypepayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_payment", type="string", length=50, nullable=true)
     */
    private $numPayment;

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
     * @var int
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=false)
     */
    private $fkBank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;


}
