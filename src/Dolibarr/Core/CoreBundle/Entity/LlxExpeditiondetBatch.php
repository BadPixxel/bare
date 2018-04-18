<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpeditiondetBatch
 *
 * @ORM\Table(name="llx_expeditiondet_batch", indexes={@ORM\Index(name="idx_fk_expeditiondet", columns={"fk_expeditiondet"})})
 * @ORM\Entity
 */
class LlxExpeditiondetBatch
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="date", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="date", nullable=true)
     */
    private $sellby;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=true)
     */
    private $batch;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_origin_stock", type="integer", nullable=false)
     */
    private $fkOriginStock;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxExpeditiondet
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxExpeditiondet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_expeditiondet", referencedColumnName="rowid")
     * })
     */
    private $fkExpeditiondet;


}
