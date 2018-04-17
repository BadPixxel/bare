<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductAssociation
 *
 * @ORM\Table(name="llx_product_association", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_association", columns={"fk_product_pere", "fk_product_fils"})}, indexes={@ORM\Index(name="idx_product_association_fils", columns={"fk_product_fils"})})
 * @ORM\Entity
 */
class LlxProductAssociation
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
     * @ORM\Column(name="fk_product_pere", type="integer", nullable=false)
     */
    private $fkProductPere = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_fils", type="integer", nullable=false)
     */
    private $fkProductFils = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="incdec", type="integer", nullable=true, options={"default"="1"})
     */
    private $incdec = '1';


}
