<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAccountingAccount
 *
 * @ORM\Table(name="llx_accounting_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_accounting_account", columns={"account_number", "entity", "fk_pcg_version"})}, indexes={@ORM\Index(name="idx_accounting_account_fk_pcg_version", columns={"fk_pcg_version"})})
 * @ORM\Entity
 */
class LlxAccountingAccount
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
     * @var string
     *
     * @ORM\Column(name="pcg_type", type="string", length=20, nullable=false)
     */
    private $pcgType;

    /**
     * @var string
     *
     * @ORM\Column(name="pcg_subtype", type="string", length=20, nullable=false)
     */
    private $pcgSubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=32, nullable=false)
     */
    private $accountNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_parent", type="string", length=32, nullable=true)
     */
    private $accountParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_accounting_category", type="integer", nullable=true)
     */
    private $fkAccountingCategory = '0';

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
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxAccountingSystem
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxAccountingSystem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pcg_version", referencedColumnName="pcg_version")
     * })
     */
    private $fkPcgVersion;


}
