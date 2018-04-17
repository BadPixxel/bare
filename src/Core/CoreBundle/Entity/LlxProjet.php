<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProjet
 *
 * @ORM\Table(name="llx_projet", uniqueConstraints={@ORM\UniqueConstraint(name="uk_projet_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_projet_fk_soc", columns={"fk_soc"})})
 * @ORM\Entity
 */
class LlxProjet
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateo", type="date", nullable=true)
     */
    private $dateo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datee", type="date", nullable=true)
     */
    private $datee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="public", type="integer", nullable=true)
     */
    private $public;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=false)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_opp_status", type="integer", nullable=true)
     */
    private $fkOppStatus;

    /**
     * @var float|null
     *
     * @ORM\Column(name="opp_percent", type="float", precision=5, scale=2, nullable=true)
     */
    private $oppPercent;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_close", type="datetime", nullable=true)
     */
    private $dateClose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_close", type="integer", nullable=true)
     */
    private $fkUserClose;

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
     * @ORM\Column(name="opp_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $oppAmount;

    /**
     * @var float|null
     *
     * @ORM\Column(name="budget_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $budgetAmount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bill_time", type="integer", nullable=true)
     */
    private $billTime = '0';

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxSociete
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie", mappedBy="fkProject")
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
