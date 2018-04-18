<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductCustomerPrice
 *
 * @ORM\Table(name="llx_product_customer_price", uniqueConstraints={@ORM\UniqueConstraint(name="uk_customer_price_fk_product_fk_soc", columns={"fk_product", "fk_soc"})}, indexes={@ORM\Index(name="idx_product_customer_price_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_product_customer_price_fk_soc", columns={"fk_soc"}), @ORM\Index(name="IDX_BF82453D23653981", columns={"fk_product"})})
 * @ORM\Entity
 */
class LlxProductCustomerPrice
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
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxSociete
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

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
