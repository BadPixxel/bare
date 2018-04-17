<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxStockMouvement
 *
 * @ORM\Table(name="llx_stock_mouvement", indexes={@ORM\Index(name="idx_stock_mouvement_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_stock_mouvement_fk_entrepot", columns={"fk_entrepot"})})
 * @ORM\Entity
 */
class LlxStockMouvement
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
     * @ORM\Column(name="datem", type="datetime", nullable=true)
     */
    private $datem;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=true)
     */
    private $batch;

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
     * @var int
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=false)
     */
    private $fkEntrepot;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value", type="float", precision=10, scale=0, nullable=true)
     */
    private $value;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_mouvement", type="smallint", nullable=true)
     */
    private $typeMouvement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inventorycode", type="string", length=128, nullable=true)
     */
    private $inventorycode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_origin", type="integer", nullable=true)
     */
    private $fkOrigin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origintype", type="string", length=32, nullable=true)
     */
    private $origintype;


}
