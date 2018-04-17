<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAccountingSystem
 *
 * @ORM\Table(name="llx_accounting_system", uniqueConstraints={@ORM\UniqueConstraint(name="uk_accounting_system_pcg_version", columns={"pcg_version"})})
 * @ORM\Entity
 */
class LlxAccountingSystem
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
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="pcg_version", type="string", length=32, nullable=false)
     */
    private $pcgVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="smallint", nullable=true)
     */
    private $active = '0';


}
