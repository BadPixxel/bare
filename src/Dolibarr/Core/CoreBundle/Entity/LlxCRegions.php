<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCRegions
 *
 * @ORM\Table(name="llx_c_regions", uniqueConstraints={@ORM\UniqueConstraint(name="uk_code_region", columns={"code_region"})}, indexes={@ORM\Index(name="idx_c_regions_fk_pays", columns={"fk_pays"})})
 * @ORM\Entity
 */
class LlxCRegions
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
     * @ORM\Column(name="code_region", type="integer", nullable=false)
     */
    private $codeRegion;

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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCCountry
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pays", referencedColumnName="rowid")
     * })
     */
    private $fkPays;


}
