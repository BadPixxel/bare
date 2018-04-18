<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxChargesociales
 *
 * @ORM\Table(name="llx_chargesociales")
 * @ORM\Entity
 */
class LlxChargesociales
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
     * @ORM\Column(name="ref", type="string", length=16, nullable=true)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ech", type="datetime", nullable=false)
     */
    private $dateEch;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=80, nullable=false)
     */
    private $libelle;

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
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

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
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mode_reglement", type="integer", nullable=true)
     */
    private $fkModeReglement;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="paye", type="smallint", nullable=false)
     */
    private $paye = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="periode", type="date", nullable=true)
     */
    private $periode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
