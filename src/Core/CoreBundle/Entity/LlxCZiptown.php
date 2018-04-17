<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCZiptown
 *
 * @ORM\Table(name="llx_c_ziptown", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ziptown_fk_pays", columns={"zip", "town", "fk_pays"})}, indexes={@ORM\Index(name="idx_c_ziptown_fk_county", columns={"fk_county"}), @ORM\Index(name="idx_c_ziptown_fk_pays", columns={"fk_pays"}), @ORM\Index(name="idx_c_ziptown_zip", columns={"zip"})})
 * @ORM\Entity
 */
class LlxCZiptown
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
     * @ORM\Column(name="code", type="string", length=5, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=180, nullable=false)
     */
    private $town;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCDepartements
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCDepartements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_county", referencedColumnName="rowid")
     * })
     */
    private $fkCounty;

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
