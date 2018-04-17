<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpensereport
 *
 * @ORM\Table(name="llx_expensereport", uniqueConstraints={@ORM\UniqueConstraint(name="idx_expensereport_uk_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_expensereport_date_debut", columns={"date_debut"}), @ORM\Index(name="idx_expensereport_date_fin", columns={"date_fin"}), @ORM\Index(name="idx_expensereport_fk_statut", columns={"fk_statut"}), @ORM\Index(name="idx_expensereport_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_expensereport_fk_user_valid", columns={"fk_user_valid"}), @ORM\Index(name="idx_expensereport_fk_user_approve", columns={"fk_user_approve"}), @ORM\Index(name="idx_expensereport_fk_refuse", columns={"fk_user_approve"})})
 * @ORM\Entity
 */
class LlxExpensereport
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=false)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ref_number_int", type="integer", nullable=true)
     */
    private $refNumberInt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ref_ext", type="integer", nullable=true)
     */
    private $refExt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTva = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax1 = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax2 = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = '0.00000000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_approve", type="datetime", nullable=true)
     */
    private $dateApprove;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_refuse", type="datetime", nullable=true)
     */
    private $dateRefuse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cancel", type="datetime", nullable=true)
     */
    private $dateCancel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_validator", type="integer", nullable=true)
     */
    private $fkUserValidator;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_approve", type="integer", nullable=true)
     */
    private $fkUserApprove;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_refuse", type="integer", nullable=true)
     */
    private $fkUserRefuse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cancel", type="integer", nullable=true)
     */
    private $fkUserCancel;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=false)
     */
    private $fkStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_c_paiement", type="integer", nullable=true)
     */
    private $fkCPaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="smallint", nullable=false)
     */
    private $paid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_refuse", type="string", length=255, nullable=true)
     */
    private $detailRefuse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_cancel", type="string", length=255, nullable=true)
     */
    private $detailCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="integration_compta", type="integer", nullable=true)
     */
    private $integrationCompta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank_account", type="integer", nullable=true)
     */
    private $fkBankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=50, nullable=true)
     */
    private $modelPdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = '1.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalHt = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTva = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTtc = '0.00000000';

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
