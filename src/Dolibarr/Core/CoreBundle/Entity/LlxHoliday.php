<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxHoliday
 *
 * @ORM\Table(name="llx_holiday", indexes={@ORM\Index(name="idx_holiday_entity", columns={"entity"}), @ORM\Index(name="idx_holiday_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_holiday_fk_user_create", columns={"fk_user_create"}), @ORM\Index(name="idx_holiday_date_create", columns={"date_create"}), @ORM\Index(name="idx_holiday_date_debut", columns={"date_debut"}), @ORM\Index(name="idx_holiday_date_fin", columns={"date_fin"}), @ORM\Index(name="idx_holiday_fk_validator", columns={"fk_validator"})})
 * @ORM\Entity
 */
class LlxHoliday
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
     * @ORM\Column(name="ref", type="string", length=30, nullable=true)
     */
    private $ref;

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
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

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
     * @var int|null
     *
     * @ORM\Column(name="halfday", type="integer", nullable=true)
     */
    private $halfday = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=false, options={"default"="1"})
     */
    private $statut = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_validator", type="integer", nullable=false)
     */
    private $fkValidator;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_refuse", type="datetime", nullable=true)
     */
    private $dateRefuse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_refuse", type="integer", nullable=true)
     */
    private $fkUserRefuse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cancel", type="datetime", nullable=true)
     */
    private $dateCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cancel", type="integer", nullable=true)
     */
    private $fkUserCancel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_refuse", type="string", length=250, nullable=true)
     */
    private $detailRefuse;

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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

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
