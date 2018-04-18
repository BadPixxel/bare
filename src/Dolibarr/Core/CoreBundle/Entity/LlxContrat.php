<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxContrat
 *
 * @ORM\Table(name="llx_contrat", uniqueConstraints={@ORM\UniqueConstraint(name="uk_contrat_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_contrat_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_contrat_fk_user_author", columns={"fk_user_author"})})
 * @ORM\Entity
 */
class LlxContrat
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_customer", type="string", length=255, nullable=true)
     */
    private $refCustomer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_supplier", type="string", length=255, nullable=true)
     */
    private $refSupplier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_contrat", type="datetime", nullable=true)
     */
    private $dateContrat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="mise_en_service", type="datetime", nullable=true)
     */
    private $miseEnService;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fin_validite", type="datetime", nullable=true)
     */
    private $finValidite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cloture", type="datetime", nullable=true)
     */
    private $dateCloture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_commercial_signature", type="integer", nullable=true)
     */
    private $fkCommercialSignature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_commercial_suivi", type="integer", nullable=true)
     */
    private $fkCommercialSuivi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_mise_en_service", type="integer", nullable=true)
     */
    private $fkUserMiseEnService;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cloture", type="integer", nullable=true)
     */
    private $fkUserCloture;

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


}
