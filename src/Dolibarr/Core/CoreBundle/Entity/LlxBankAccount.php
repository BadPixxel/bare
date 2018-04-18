<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBankAccount
 *
 * @ORM\Table(name="llx_bank_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_account_label", columns={"label", "entity"})}, indexes={@ORM\Index(name="idx_fk_accountancy_journal", columns={"fk_accountancy_journal"})})
 * @ORM\Entity
 */
class LlxBankAccount
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=12, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

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
     * @var string|null
     *
     * @ORM\Column(name="bank", type="string", length=60, nullable=true)
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
     * @ORM\Column(name="bic", type="string", length=11, nullable=true)
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
     * @ORM\Column(name="country_iban", type="string", length=2, nullable=true)
     */
    private $countryIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_iban", type="string", length=2, nullable=true)
     */
    private $cleIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domiciliation", type="string", length=255, nullable=true)
     */
    private $domiciliation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state_id", type="integer", nullable=true)
     */
    private $stateId;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

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
     * @ORM\Column(name="courant", type="smallint", nullable=false)
     */
    private $courant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clos", type="smallint", nullable=false)
     */
    private $clos = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rappro", type="smallint", nullable=true, options={"default"="1"})
     */
    private $rappro = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=128, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_number", type="string", length=32, nullable=true)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=3, nullable=false)
     */
    private $currencyCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_allowed", type="integer", nullable=true)
     */
    private $minAllowed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_desired", type="integer", nullable=true)
     */
    private $minDesired = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxAccountingJournal
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxAccountingJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_accountancy_journal", referencedColumnName="rowid")
     * })
     */
    private $fkAccountancyJournal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie", mappedBy="fkAccount")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
