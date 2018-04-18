<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProductAttributeValue
 *
 * @ORM\Table(name="llx_product_attribute_value", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_attribute_value", columns={"fk_product_attribute", "ref"})})
 * @ORM\Entity
 */
class LlxProductAttributeValue
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
     * @ORM\Column(name="fk_product_attribute", type="integer", nullable=false)
     */
    private $fkProductAttribute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=180, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';


}
