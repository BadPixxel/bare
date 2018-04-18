<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCommandeFournisseurDispatch
 *
 * @ORM\Table(name="llx_commande_fournisseur_dispatch", indexes={@ORM\Index(name="idx_commande_fournisseur_dispatch_fk_commande", columns={"fk_commande"})})
 * @ORM\Entity
 */
class LlxCommandeFournisseurDispatch
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
     * @ORM\Column(name="fk_commande", type="integer", nullable=true)
     */
    private $fkCommande;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_commandefourndet", type="integer", nullable=true)
     */
    private $fkCommandefourndet;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=true)
     */
    private $fkEntrepot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=30, nullable=true)
     */
    private $batch;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="date", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="date", nullable=true)
     */
    private $sellby;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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


}
