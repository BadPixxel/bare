<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPrelevementFactureDemande
 *
 * @ORM\Table(name="llx_prelevement_facture_demande")
 * @ORM\Entity
 */
class LlxPrelevementFactureDemande
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
     * @ORM\Column(name="fk_facture", type="integer", nullable=false)
     */
    private $fkFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_demande", type="datetime", nullable=false)
     */
    private $dateDemande;

    /**
     * @var int|null
     *
     * @ORM\Column(name="traite", type="smallint", nullable=true)
     */
    private $traite = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_traite", type="datetime", nullable=true)
     */
    private $dateTraite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_prelevement_bons", type="integer", nullable=true)
     */
    private $fkPrelevementBons;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_demande", type="integer", nullable=false)
     */
    private $fkUserDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_banque", type="string", length=128, nullable=true)
     */
    private $codeBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_guichet", type="string", length=6, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_rib", type="string", length=5, nullable=true)
     */
    private $cleRib;


}
