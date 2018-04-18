<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEntrepot
 *
 * @ORM\Table(name="llx_entrepot", uniqueConstraints={@ORM\UniqueConstraint(name="uk_entrepot_label", columns={"ref", "entity"})})
 * @ORM\Entity
 */
class LlxEntrepot
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=false)
     */
    private $ref;

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
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=64, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="town", type="string", length=50, nullable=true)
     */
    private $town;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_departement", type="integer", nullable=true)
     */
    private $fkDepartement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=true)
     */
    private $fkPays = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true, options={"default"="1"})
     */
    private $statut = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=true)
     */
    private $fkParent = '0';


}
