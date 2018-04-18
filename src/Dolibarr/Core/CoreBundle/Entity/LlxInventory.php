<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxInventory
 *
 * @ORM\Table(name="llx_inventory", uniqueConstraints={@ORM\UniqueConstraint(name="uk_inventory_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_inventory_tms", columns={"tms"}), @ORM\Index(name="idx_inventory_date_creation", columns={"date_creation"})})
 * @ORM\Entity
 */
class LlxInventory
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
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true)
     */
    private $entity = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=48, nullable=true)
     */
    private $ref;

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
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
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
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_inventory", type="datetime", nullable=true)
     */
    private $dateInventory;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validation", type="datetime", nullable=true)
     */
    private $dateValidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
