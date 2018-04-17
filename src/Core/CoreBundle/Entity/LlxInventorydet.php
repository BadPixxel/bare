<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxInventorydet
 *
 * @ORM\Table(name="llx_inventorydet", indexes={@ORM\Index(name="idx_inventorydet_tms", columns={"tms"}), @ORM\Index(name="idx_inventorydet_datec", columns={"datec"}), @ORM\Index(name="idx_inventorydet_fk_inventory", columns={"fk_inventory"})})
 * @ORM\Entity
 */
class LlxInventorydet
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
     * @var int|null
     *
     * @ORM\Column(name="fk_inventory", type="integer", nullable=true)
     */
    private $fkInventory = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=true)
     */
    private $batch;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_view", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyView;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_stock", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyStock;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_regulated", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyRegulated;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pmp", type="float", precision=10, scale=0, nullable=true)
     */
    private $pmp = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="pa", type="float", precision=10, scale=0, nullable=true)
     */
    private $pa = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="new_pmp", type="float", precision=10, scale=0, nullable=true)
     */
    private $newPmp = '0';


}
