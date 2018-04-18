<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpensereportDet
 *
 * @ORM\Table(name="llx_expensereport_det")
 * @ORM\Entity
 */
class LlxExpensereportDet
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
     * @ORM\Column(name="fk_expensereport", type="integer", nullable=false)
     */
    private $fkExpensereport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="docnumber", type="string", length=128, nullable=true)
     */
    private $docnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_type_fees", type="integer", nullable=false)
     */
    private $fkCTypeFees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=true)
     */
    private $fkCExpTaxCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_type", type="integer", nullable=true, options={"default"="-1"})
     */
    private $productType = '-1';

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty;

    /**
     * @var float
     *
     * @ORM\Column(name="value_unit", type="float", precision=10, scale=0, nullable=false)
     */
    private $valueUnit;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_src_code", type="string", length=10, nullable=true)
     */
    private $vatSrcCode = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true)
     */
    private $tvaTx;

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
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $totalHt = '0.00000000';

    /**
     * @var float
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
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
     * @var float
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $totalTtc = '0.00000000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_code", type="integer", nullable=true)
     */
    private $specialCode = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_code_ventilation", type="integer", nullable=true)
     */
    private $fkCodeVentilation = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rule_warning_message", type="text", length=65535, nullable=true)
     */
    private $ruleWarningMessage;


}
