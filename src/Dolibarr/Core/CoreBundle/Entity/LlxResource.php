<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxResource
 *
 * @ORM\Table(name="llx_resource", uniqueConstraints={@ORM\UniqueConstraint(name="uk_resource_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="fk_code_type_resource_idx", columns={"fk_code_type_resource"}), @ORM\Index(name="idx_resource_fk_country", columns={"fk_country"})})
 * @ORM\Entity
 */
class LlxResource
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
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asset_number", type="string", length=255, nullable=true)
     */
    private $assetNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_code_type_resource", type="string", length=32, nullable=true)
     */
    private $fkCodeTypeResource;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCCountry
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_country", referencedColumnName="rowid")
     * })
     */
    private $fkCountry;


}
