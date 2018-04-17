<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductStock
 *
 * @ORM\Table(name="llx_product_stock", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_stock", columns={"fk_product", "fk_entrepot"})}, indexes={@ORM\Index(name="idx_product_stock_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_product_stock_fk_entrepot", columns={"fk_entrepot"})})
 * @ORM\Entity
 */
class LlxProductStock
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
     * @var float|null
     *
     * @ORM\Column(name="reel", type="float", precision=10, scale=0, nullable=true)
     */
    private $reel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
