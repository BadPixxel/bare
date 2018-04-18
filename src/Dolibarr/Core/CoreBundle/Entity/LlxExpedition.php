<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpedition
 *
 * @ORM\Table(name="llx_expedition", uniqueConstraints={@ORM\UniqueConstraint(name="idx_expedition_uk_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_expedition_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_expedition_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_expedition_fk_user_valid", columns={"fk_user_valid"}), @ORM\Index(name="idx_expedition_fk_shipping_method", columns={"fk_shipping_method"})})
 * @ORM\Entity
 */
class LlxExpedition
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

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
     * @ORM\Column(name="ref_customer", type="string", length=255, nullable=true)
     */
    private $refCustomer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_delivery", type="datetime", nullable=true)
     */
    private $dateDelivery;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_expedition", type="datetime", nullable=true)
     */
    private $dateExpedition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_address", type="integer", nullable=true)
     */
    private $fkAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="string", length=50, nullable=true)
     */
    private $trackingNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=true)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="billed", type="smallint", nullable=true)
     */
    private $billed = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size_units", type="integer", nullable=true)
     */
    private $sizeUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="size", type="float", precision=10, scale=0, nullable=true)
     */
    private $size;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weight_units", type="integer", nullable=true)
     */
    private $weightUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCShipmentMode
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCShipmentMode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_shipping_method", referencedColumnName="rowid")
     * })
     */
    private $fkShippingMethod;

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
