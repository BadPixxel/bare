<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAccountingBookkeepingTmp
 *
 * @ORM\Table(name="llx_accounting_bookkeeping_tmp", indexes={@ORM\Index(name="idx_accounting_bookkeeping_doc_date", columns={"doc_date"}), @ORM\Index(name="idx_accounting_bookkeeping_fk_docdet", columns={"fk_docdet"}), @ORM\Index(name="idx_accounting_bookkeeping_numero_compte", columns={"numero_compte"}), @ORM\Index(name="idx_accounting_bookkeeping_code_journal", columns={"code_journal"})})
 * @ORM\Entity
 */
class LlxAccountingBookkeepingTmp
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
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false)
     */
    private $docDate;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_type", type="string", length=30, nullable=false)
     */
    private $docType;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_ref", type="string", length=300, nullable=false)
     */
    private $docRef;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_doc", type="integer", nullable=false)
     */
    private $fkDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_docdet", type="integer", nullable=false)
     */
    private $fkDocdet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thirdparty_code", type="string", length=32, nullable=true)
     */
    private $thirdpartyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subledger_account", type="string", length=32, nullable=true)
     */
    private $subledgerAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subledger_label", type="string", length=255, nullable=true)
     */
    private $subledgerLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_compte", type="string", length=32, nullable=true)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="label_compte", type="string", length=255, nullable=false)
     */
    private $labelCompte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label_operation", type="string", length=255, nullable=true)
     */
    private $labelOperation;

    /**
     * @var float
     *
     * @ORM\Column(name="debit", type="float", precision=24, scale=8, nullable=false)
     */
    private $debit;

    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float", precision=24, scale=8, nullable=false)
     */
    private $credit;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=24, scale=8, nullable=false)
     */
    private $montant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sens", type="string", length=1, nullable=true)
     */
    private $sens;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lettering_code", type="string", length=255, nullable=true)
     */
    private $letteringCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lettering", type="datetime", nullable=true)
     */
    private $dateLettering;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lim_reglement", type="datetime", nullable=true)
     */
    private $dateLimReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string
     *
     * @ORM\Column(name="code_journal", type="string", length=32, nullable=false)
     */
    private $codeJournal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="journal_label", type="string", length=255, nullable=true)
     */
    private $journalLabel;

    /**
     * @var int
     *
     * @ORM\Column(name="piece_num", type="integer", nullable=false)
     */
    private $pieceNum;

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validated", type="datetime", nullable=true)
     */
    private $dateValidated;

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


}
