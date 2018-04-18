<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxSocieteRib
 *
 * @ORM\Table(name="llx_societe_rib", uniqueConstraints={@ORM\UniqueConstraint(name="uk_societe_rib", columns={"label", "fk_soc"})})
 * @ORM\Entity
 */
class LlxSocieteRib
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
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=true, options={"default"="ban"})
     */
    private $type = 'ban';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=true)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=false)
     */
    private $fkSoc;

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
     * @var string|null
     *
     * @ORM\Column(name="bank", type="string", length=255, nullable=true)
     */
    private $bank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_banque", type="string", length=128, nullable=true)
     */
    private $codeBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_guichet", type="string", length=6, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_rib", type="string", length=5, nullable=true)
     */
    private $cleRib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bic", type="string", length=20, nullable=true)
     */
    private $bic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iban_prefix", type="string", length=34, nullable=true)
     */
    private $ibanPrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domiciliation", type="string", length=255, nullable=true)
     */
    private $domiciliation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proprio", type="string", length=60, nullable=true)
     */
    private $proprio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner_address", type="string", length=255, nullable=true)
     */
    private $ownerAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="default_rib", type="smallint", nullable=false)
     */
    private $defaultRib = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rum", type="string", length=32, nullable=true)
     */
    private $rum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rum", type="date", nullable=true)
     */
    private $dateRum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="frstrecur", type="string", length=16, nullable=true, options={"default"="FRST"})
     */
    private $frstrecur = 'FRST';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_four", type="string", length=4, nullable=true)
     */
    private $lastFour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_type", type="string", length=255, nullable=true)
     */
    private $cardType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvn", type="string", length=255, nullable=true)
     */
    private $cvn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_date_month", type="integer", nullable=true)
     */
    private $expDateMonth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_date_year", type="integer", nullable=true)
     */
    private $expDateYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=10, nullable=true)
     */
    private $countryCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="approved", type="integer", nullable=true)
     */
    private $approved = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ending_date", type="date", nullable=true)
     */
    private $endingDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="max_total_amount_of_all_payments", type="float", precision=24, scale=8, nullable=true)
     */
    private $maxTotalAmountOfAllPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preapproval_key", type="string", length=255, nullable=true)
     */
    private $preapprovalKey;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="starting_date", type="date", nullable=true)
     */
    private $startingDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_amount_of_all_payments", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalAmountOfAllPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_card_ref", type="string", length=128, nullable=true)
     */
    private $stripeCardRef;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
