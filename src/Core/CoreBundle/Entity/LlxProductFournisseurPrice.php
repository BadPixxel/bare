<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductFournisseurPrice
 *
 * @ORM\Table(name="llx_product_fournisseur_price", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_fournisseur_price_ref", columns={"ref_fourn", "fk_soc", "quantity", "entity"})}, indexes={@ORM\Index(name="idx_product_fournisseur_price_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_product_fourn_price_fk_product", columns={"fk_product", "entity"}), @ORM\Index(name="idx_product_fourn_price_fk_soc", columns={"fk_soc", "entity"}), @ORM\Index(name="IDX_E905F9E423653981", columns={"fk_product"})})
 * @ORM\Entity
 */
class LlxProductFournisseurPrice
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
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

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
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_fourn", type="string", length=30, nullable=true)
     */
    private $refFourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_availability", type="integer", nullable=true)
     */
    private $fkAvailability;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = '0.00000000';

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
     * @var float|null
     *
     * @ORM\Column(name="charges", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $charges = '0.00000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var float
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=false)
     */
    private $tvaTx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax1Tx = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=false)
     */
    private $localtax1Type = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax2Tx = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=false)
     */
    private $localtax2Type = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=false)
     */
    private $infoBits = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_supplier_price_expression", type="integer", nullable=true)
     */
    private $fkSupplierPriceExpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_time_days", type="integer", nullable=true)
     */
    private $deliveryTimeDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_reputation", type="string", length=10, nullable=true)
     */
    private $supplierReputation;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxProduct
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product", referencedColumnName="rowid")
     * })
     */
    private $fkProduct;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;


}
