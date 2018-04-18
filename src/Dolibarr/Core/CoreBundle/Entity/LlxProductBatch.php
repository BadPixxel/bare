<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductBatch
 *
 * @ORM\Table(name="llx_product_batch", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_batch", columns={"fk_product_stock", "batch"})}, indexes={@ORM\Index(name="idx_fk_product_stock", columns={"fk_product_stock"}), @ORM\Index(name="idx_batch", columns={"batch"})})
 * @ORM\Entity
 */
class LlxProductBatch
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="datetime", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="datetime", nullable=true)
     */
    private $sellby;

    /**
     * @var string
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=false)
     */
    private $batch;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxProductStock
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProductStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product_stock", referencedColumnName="rowid")
     * })
     */
    private $fkProductStock;


}
