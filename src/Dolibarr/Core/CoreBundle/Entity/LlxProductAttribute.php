<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductAttribute
 *
 * @ORM\Table(name="llx_product_attribute", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_attribute_ref", columns={"ref"})})
 * @ORM\Entity
 */
class LlxProductAttribute
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="rang", type="integer", nullable=false)
     */
    private $rang = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';


}
