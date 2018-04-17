<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxElementResources
 *
 * @ORM\Table(name="llx_element_resources", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_resources_idx1", columns={"resource_id", "resource_type", "element_id", "element_type"})}, indexes={@ORM\Index(name="idx_element_element_element_id", columns={"element_id"})})
 * @ORM\Entity
 */
class LlxElementResources
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
     * @ORM\Column(name="element_id", type="integer", nullable=true)
     */
    private $elementId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="element_type", type="string", length=64, nullable=true)
     */
    private $elementType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=true)
     */
    private $resourceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource_type", type="string", length=64, nullable=true)
     */
    private $resourceType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="busy", type="integer", nullable=true)
     */
    private $busy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mandatory", type="integer", nullable=true)
     */
    private $mandatory;

    /**
     * @var float|null
     *
     * @ORM\Column(name="duree", type="float", precision=10, scale=0, nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
