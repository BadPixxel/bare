<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxFichinterdet
 *
 * @ORM\Table(name="llx_fichinterdet", indexes={@ORM\Index(name="idx_fichinterdet_fk_fichinter", columns={"fk_fichinter"})})
 * @ORM\Entity
 */
class LlxFichinterdet
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
     * @ORM\Column(name="fk_parent_line", type="integer", nullable=true)
     */
    private $fkParentLine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFichinter
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFichinter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_fichinter", referencedColumnName="rowid")
     * })
     */
    private $fkFichinter;


}
