<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxFacture
 *
 * @ORM\Table(name="llx_facture", uniqueConstraints={@ORM\UniqueConstraint(name="idx_facture_uk_facnumber", columns={"facnumber", "entity"})}, indexes={@ORM\Index(name="idx_facture_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_facture_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_facture_fk_user_valid", columns={"fk_user_valid"}), @ORM\Index(name="idx_facture_fk_facture_source", columns={"fk_facture_source"}), @ORM\Index(name="idx_facture_fk_projet", columns={"fk_projet"}), @ORM\Index(name="idx_facture_fk_account", columns={"fk_account"}), @ORM\Index(name="idx_facture_fk_currency", columns={"fk_currency"}), @ORM\Index(name="idx_facture_fk_statut", columns={"fk_statut"})})
 * @ORM\Entity
 */
class LlxFacture
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
     * @ORM\Column(name="facnumber", type="string", length=30, nullable=false)
     */
    private $facnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_int", type="string", length=255, nullable=true)
     */
    private $refInt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_client", type="string", length=255, nullable=true)
     */
    private $refClient;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="increment", type="string", length=10, nullable=true)
     */
    private $increment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datef", type="date", nullable=true)
     */
    private $datef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_pointoftax", type="date", nullable=true)
     */
    private $datePointoftax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="date", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="paye", type="smallint", nullable=false)
     */
    private $paye = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_absolue", type="float", precision=10, scale=0, nullable=true)
     */
    private $remiseAbsolue = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="close_code", type="string", length=16, nullable=true)
     */
    private $closeCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="close_note", type="string", length=128, nullable=true)
     */
    private $closeNote;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $tva = '0.00000000';

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
     * @ORM\Column(name="revenuestamp", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $revenuestamp = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $total = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_fac_rec_source", type="integer", nullable=true)
     */
    private $fkFacRecSource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_currency", type="string", length=3, nullable=true)
     */
    private $fkCurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_cond_reglement", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkCondReglement = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mode_reglement", type="integer", nullable=true)
     */
    private $fkModeReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lim_reglement", type="date", nullable=true)
     */
    private $dateLimReglement;

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
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_main_doc", type="string", length=255, nullable=true)
     */
    private $lastMainDoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_incoterms", type="integer", nullable=true)
     */
    private $fkIncoterms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_incoterms", type="string", length=255, nullable=true)
     */
    private $locationIncoterms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="situation_cycle_ref", type="smallint", nullable=true)
     */
    private $situationCycleRef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="situation_counter", type="smallint", nullable=true)
     */
    private $situationCounter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="situation_final", type="smallint", nullable=true)
     */
    private $situationFinal;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFacture
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFacture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture_source", referencedColumnName="rowid")
     * })
     */
    private $fkFactureSource;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxProjet
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_projet", referencedColumnName="rowid")
     * })
     */
    private $fkProjet;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxSociete
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_author", referencedColumnName="rowid")
     * })
     */
    private $fkUserAuthor;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_valid", referencedColumnName="rowid")
     * })
     */
    private $fkUserValid;


}
