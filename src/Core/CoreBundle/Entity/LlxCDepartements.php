<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCDepartements
 *
 * @ORM\Table(name="llx_c_departements", uniqueConstraints={@ORM\UniqueConstraint(name="uk_departements", columns={"code_departement", "fk_region"})}, indexes={@ORM\Index(name="idx_departements_fk_region", columns={"fk_region"})})
 * @ORM\Entity
 */
class LlxCDepartements
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
     * @ORM\Column(name="code_departement", type="string", length=6, nullable=false)
     */
    private $codeDepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheflieu", type="string", length=50, nullable=true)
     */
    private $cheflieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tncc", type="integer", nullable=true)
     */
    private $tncc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ncc", type="string", length=50, nullable=true)
     */
    private $ncc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCRegions
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCRegions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_region", referencedColumnName="code_region")
     * })
     */
    private $fkRegion;


}
