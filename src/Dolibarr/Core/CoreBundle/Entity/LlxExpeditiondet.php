<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpeditiondet
 *
 * @ORM\Table(name="llx_expeditiondet", indexes={@ORM\Index(name="idx_expeditiondet_fk_expedition", columns={"fk_expedition"})})
 * @ORM\Entity
 */
class LlxExpeditiondet
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
     * @ORM\Column(name="fk_origin_line", type="integer", nullable=true)
     */
    private $fkOriginLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=true)
     */
    private $fkEntrepot;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxExpedition
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxExpedition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_expedition", referencedColumnName="rowid")
     * })
     */
    private $fkExpedition;


}
