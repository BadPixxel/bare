<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProduct
 *
 * @ORM\Table(name="llx_product", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_ref", columns={"ref", "entity"}), @ORM\UniqueConstraint(name="uk_product_barcode", columns={"barcode", "fk_barcode_type", "entity"})}, indexes={@ORM\Index(name="idx_product_label", columns={"label"}), @ORM\Index(name="idx_product_barcode", columns={"barcode"}), @ORM\Index(name="idx_product_import_key", columns={"import_key"}), @ORM\Index(name="idx_product_seuil_stock_alerte", columns={"seuil_stock_alerte"}), @ORM\Index(name="idx_product_fk_country", columns={"fk_country"}), @ORM\Index(name="idx_product_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_product_fk_barcode_type", columns={"fk_barcode_type"}), @ORM\Index(name="fk_product_fk_unit", columns={"fk_unit"})})
 * @ORM\Entity
 */
class LlxProduct
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=128, nullable=true)
     */
    private $refExt;

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
     * @ORM\Column(name="fk_parent", type="integer", nullable=true)
     */
    private $fkParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customcode", type="string", length=32, nullable=true)
     */
    private $customcode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceTtc = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMin = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMinTtc = '0.00000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var float|null
     *
     * @ORM\Column(name="cost_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $costPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true)
     */
    private $tvaTx;

    /**
     * @var int
     *
     * @ORM\Column(name="recuperableonly", type="integer", nullable=false)
     */
    private $recuperableonly = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tosell", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tosell = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tobuy", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tobuy = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="onportal", type="boolean", nullable=true)
     */
    private $onportal = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tobatch", type="boolean", nullable=false)
     */
    private $tobatch = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_type", type="integer", nullable=true)
     */
    private $fkProductType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="string", length=6, nullable=true)
     */
    private $duration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seuil_stock_alerte", type="integer", nullable=true)
     */
    private $seuilStockAlerte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=180, nullable=true)
     */
    private $barcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_intra", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_export", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellExport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partnumber", type="string", length=32, nullable=true)
     */
    private $partnumber;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="weight_units", type="boolean", nullable=true)
     */
    private $weightUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="length", type="float", precision=10, scale=0, nullable=true)
     */
    private $length;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="length_units", type="boolean", nullable=true)
     */
    private $lengthUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="width_units", type="boolean", nullable=true)
     */
    private $widthUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="height_units", type="boolean", nullable=true)
     */
    private $heightUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=true)
     */
    private $surface;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="surface_units", type="boolean", nullable=true)
     */
    private $surfaceUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="volume_units", type="boolean", nullable=true)
     */
    private $volumeUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="stock", type="float", precision=10, scale=0, nullable=true)
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="pmp", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $pmp = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="fifo", type="float", precision=24, scale=8, nullable=true)
     */
    private $fifo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="lifo", type="float", precision=24, scale=8, nullable=true)
     */
    private $lifo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="canvas", type="string", length=32, nullable=true)
     */
    private $canvas;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="finished", type="boolean", nullable=true)
     */
    private $finished;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true)
     */
    private $hidden = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_price_expression", type="integer", nullable=true)
     */
    private $fkPriceExpression;

    /**
     * @var int|null
     *
     * @ORM\Column(name="desiredstock", type="integer", nullable=true)
     */
    private $desiredstock = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="price_autogen", type="boolean", nullable=true)
     */
    private $priceAutogen = '0';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCBarcodeType
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCBarcodeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_barcode_type", referencedColumnName="rowid")
     * })
     */
    private $fkBarcodeType;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCCountry
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_country", referencedColumnName="rowid")
     * })
     */
    private $fkCountry;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCUnits
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCUnits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unit", referencedColumnName="rowid")
     * })
     */
    private $fkUnit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie", mappedBy="fkProduct")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
