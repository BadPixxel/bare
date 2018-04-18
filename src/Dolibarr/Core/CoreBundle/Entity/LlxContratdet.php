<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxContratdet
 *
 * @ORM\Table(name="llx_contratdet", indexes={@ORM\Index(name="idx_contratdet_fk_contrat", columns={"fk_contrat"}), @ORM\Index(name="idx_contratdet_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_contratdet_date_ouverture_prevue", columns={"date_ouverture_prevue"}), @ORM\Index(name="idx_contratdet_date_ouverture", columns={"date_ouverture"}), @ORM\Index(name="idx_contratdet_date_fin_validite", columns={"date_fin_validite"}), @ORM\Index(name="fk_contratdet_fk_unit", columns={"fk_unit"})})
 * @ORM\Entity
 */
class LlxContratdet
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
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_commande", type="datetime", nullable=true)
     */
    private $dateCommande;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ouverture_prevue", type="datetime", nullable=true)
     */
    private $dateOuverturePrevue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ouverture", type="datetime", nullable=true)
     */
    private $dateOuverture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_validite", type="datetime", nullable=true)
     */
    private $dateFinValidite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cloture", type="datetime", nullable=true)
     */
    private $dateCloture;

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
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
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
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $subprice = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ht", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceHt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

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
     * @ORM\Column(name="product_type", type="integer", nullable=true, options={"default"="1"})
     */
    private $productType = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="buy_price_ht", type="float", precision=24, scale=8, nullable=true)
     */
    private $buyPriceHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_fournisseur_price", type="integer", nullable=true)
     */
    private $fkProductFournisseurPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_ouverture", type="integer", nullable=true)
     */
    private $fkUserOuverture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cloture", type="integer", nullable=true)
     */
    private $fkUserCloture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxContrat
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxContrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_contrat", referencedColumnName="rowid")
     * })
     */
    private $fkContrat;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCUnits
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCUnits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unit", referencedColumnName="rowid")
     * })
     */
    private $fkUnit;


}
