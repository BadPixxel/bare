<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPaiementFacture
 *
 * @ORM\Table(name="llx_paiement_facture", uniqueConstraints={@ORM\UniqueConstraint(name="uk_paiement_facture", columns={"fk_paiement", "fk_facture"})}, indexes={@ORM\Index(name="idx_paiement_facture_fk_facture", columns={"fk_facture"}), @ORM\Index(name="idx_paiement_facture_fk_paiement", columns={"fk_paiement"})})
 * @ORM\Entity
 */
class LlxPaiementFacture
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
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

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
     * @ORM\Column(name="multicurrency_amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyAmount = '0.00000000';

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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxPaiement
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxPaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_paiement", referencedColumnName="rowid")
     * })
     */
    private $fkPaiement;


}
