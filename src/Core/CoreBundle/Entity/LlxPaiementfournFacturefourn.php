<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPaiementfournFacturefourn
 *
 * @ORM\Table(name="llx_paiementfourn_facturefourn", uniqueConstraints={@ORM\UniqueConstraint(name="uk_paiementfourn_facturefourn", columns={"fk_paiementfourn", "fk_facturefourn"})}, indexes={@ORM\Index(name="idx_paiementfourn_facturefourn_fk_facture", columns={"fk_facturefourn"}), @ORM\Index(name="idx_paiementfourn_facturefourn_fk_paiement", columns={"fk_paiementfourn"})})
 * @ORM\Entity
 */
class LlxPaiementfournFacturefourn
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
     * @ORM\Column(name="fk_paiementfourn", type="integer", nullable=true)
     */
    private $fkPaiementfourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facturefourn", type="integer", nullable=true)
     */
    private $fkFacturefourn;

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


}
