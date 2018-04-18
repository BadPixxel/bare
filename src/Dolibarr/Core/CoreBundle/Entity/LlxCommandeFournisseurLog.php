<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCommandeFournisseurLog
 *
 * @ORM\Table(name="llx_commande_fournisseur_log")
 * @ORM\Entity
 */
class LlxCommandeFournisseurLog
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
     * @var \DateTime
     *
     * @ORM\Column(name="datelog", type="datetime", nullable=false)
     */
    private $datelog;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_commande", type="integer", nullable=false)
     */
    private $fkCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


}
