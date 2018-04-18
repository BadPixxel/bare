<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxSocieteRemiseExcept
 *
 * @ORM\Table(name="llx_societe_remise_except", indexes={@ORM\Index(name="idx_societe_remise_except_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_societe_remise_except_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_societe_remise_except_fk_facture_line", columns={"fk_facture_line"}), @ORM\Index(name="idx_societe_remise_except_fk_facture", columns={"fk_facture"}), @ORM\Index(name="idx_societe_remise_except_fk_facture_source", columns={"fk_facture_source"}), @ORM\Index(name="idx_societe_remise_except_discount_type", columns={"discount_type"}), @ORM\Index(name="fk_soc_remise_fk_invoice_supplier_line", columns={"fk_invoice_supplier_line"}), @ORM\Index(name="fk_societe_remise_fk_invoice_supplier_source", columns={"fk_invoice_supplier"})})
 * @ORM\Entity
 */
class LlxSocieteRemiseExcept
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
     * @var int
     *
     * @ORM\Column(name="discount_type", type="integer", nullable=false)
     */
    private $discountType = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_ht", type="float", precision=24, scale=8, nullable=false)
     */
    private $amountHt;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_tva", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amountTva = '0.00000000';

    /**
     * @var float
     *
     * @ORM\Column(name="amount_ttc", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amountTtc = '0.00000000';

    /**
     * @var float
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $tvaTx = '0.000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_invoice_supplier_source", type="integer", nullable=true)
     */
    private $fkInvoiceSupplierSource;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="multicurrency_amount_ht", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $multicurrencyAmountHt = '0.00000000';

    /**
     * @var float
     *
     * @ORM\Column(name="multicurrency_amount_tva", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $multicurrencyAmountTva = '0.00000000';

    /**
     * @var float
     *
     * @ORM\Column(name="multicurrency_amount_ttc", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $multicurrencyAmountTtc = '0.00000000';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFacturedet
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFacturedet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture_line", referencedColumnName="rowid")
     * })
     */
    private $fkFactureLine;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFactureFournDet
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFactureFournDet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_invoice_supplier_line", referencedColumnName="rowid")
     * })
     */
    private $fkInvoiceSupplierLine;

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFacture
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFacture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture", referencedColumnName="rowid")
     * })
     */
    private $fkFacture;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFacture
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFacture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture_source", referencedColumnName="rowid")
     * })
     */
    private $fkFactureSource;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxFactureFourn
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxFactureFourn")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_invoice_supplier", referencedColumnName="rowid")
     * })
     */
    private $fkInvoiceSupplier;

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
