<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductPriceByQty
 *
 * @ORM\Table(name="llx_product_price_by_qty", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_price_by_qty_level", columns={"fk_product_price", "quantity"})}, indexes={@ORM\Index(name="idx_product_price_by_qty_fk_product_price", columns={"fk_product_price"})})
 * @ORM\Entity
 */
class LlxProductPriceByQty
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
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = '0.00000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $remisePercent = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=false)
     */
    private $remise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="unitprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $unitprice = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = '1.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPrice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price_ttc", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPriceTtc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxProductPrice
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProductPrice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product_price", referencedColumnName="rowid")
     * })
     */
    private $fkProductPrice;


}
