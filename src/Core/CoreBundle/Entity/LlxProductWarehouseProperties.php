<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductWarehouseProperties
 *
 * @ORM\Table(name="llx_product_warehouse_properties")
 * @ORM\Entity
 */
class LlxProductWarehouseProperties
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
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=false)
     */
    private $fkEntrepot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seuil_stock_alerte", type="integer", nullable=true)
     */
    private $seuilStockAlerte = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="desiredstock", type="integer", nullable=true)
     */
    private $desiredstock = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
