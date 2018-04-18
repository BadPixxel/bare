<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxLivraisondet
 *
 * @ORM\Table(name="llx_livraisondet", indexes={@ORM\Index(name="idx_livraisondet_fk_expedition", columns={"fk_livraison"})})
 * @ORM\Entity
 */
class LlxLivraisondet
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
     * @ORM\Column(name="fk_origin_line", type="integer", nullable=true)
     */
    private $fkOriginLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $subprice = '0.00000000';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxLivraison
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxLivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_livraison", referencedColumnName="rowid")
     * })
     */
    private $fkLivraison;


}
