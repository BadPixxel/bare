<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCTypeContainer
 *
 * @ORM\Table(name="llx_c_type_container", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_type_container_id", columns={"code", "entity"})})
 * @ORM\Entity
 */
class LlxCTypeContainer
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
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
