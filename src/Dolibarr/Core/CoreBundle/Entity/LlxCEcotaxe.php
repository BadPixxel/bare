<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCEcotaxe
 *
 * @ORM\Table(name="llx_c_ecotaxe", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_ecotaxe", columns={"code"})})
 * @ORM\Entity
 */
class LlxCEcotaxe
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
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organization", type="string", length=255, nullable=true)
     */
    private $organization;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
