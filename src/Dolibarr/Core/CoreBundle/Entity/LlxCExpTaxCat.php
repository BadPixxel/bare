<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCExpTaxCat
 *
 * @ORM\Table(name="llx_c_exp_tax_cat")
 * @ORM\Entity
 */
class LlxCExpTaxCat
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=48, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
