<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPrelevementFacture
 *
 * @ORM\Table(name="llx_prelevement_facture", indexes={@ORM\Index(name="idx_prelevement_facture_fk_prelevement_lignes", columns={"fk_prelevement_lignes"})})
 * @ORM\Entity
 */
class LlxPrelevementFacture
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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxPrelevementLignes
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxPrelevementLignes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_prelevement_lignes", referencedColumnName="rowid")
     * })
     */
    private $fkPrelevementLignes;


}
