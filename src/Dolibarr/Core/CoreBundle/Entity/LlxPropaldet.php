<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPropaldet
 *
 * @ORM\Table(name="llx_propaldet", indexes={@ORM\Index(name="idx_propaldet_fk_propal", columns={"fk_propal"}), @ORM\Index(name="idx_propaldet_fk_product", columns={"fk_product"}), @ORM\Index(name="fk_propaldet_fk_unit", columns={"fk_unit"})})
 * @ORM\Entity
 */
class LlxPropaldet
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
     * @ORM\Column(name="fk_parent_line", type="integer", nullable=true)
     */
    private $fkParentLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_remise_except", type="integer", nullable=true)
     */
    private $fkRemiseExcept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_src_code", type="string", length=10, nullable=true)
     */
    private $vatSrcCode = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $tvaTx = '0.000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax1Tx = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=true)
     */
    private $localtax1Type;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax2Tx = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=true)
     */
    private $localtax2Type;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $subprice = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTva = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_localtax1", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalLocaltax1 = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_localtax2", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalLocaltax2 = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_type", type="integer", nullable=true)
     */
    private $productType = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="buy_price_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $buyPriceHt = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_fournisseur_price", type="integer", nullable=true)
     */
    private $fkProductFournisseurPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_code", type="integer", nullable=true)
     */
    private $specialCode = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

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
     * @ORM\Column(name="multicurrency_subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencySubprice = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalHt = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTva = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTtc = '0.00000000';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxPropal
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxPropal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_propal", referencedColumnName="rowid")
     * })
     */
    private $fkPropal;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCUnits
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCUnits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unit", referencedColumnName="rowid")
     * })
     */
    private $fkUnit;


}
