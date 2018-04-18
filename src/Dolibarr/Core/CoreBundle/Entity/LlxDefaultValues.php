<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxDefaultValues
 *
 * @ORM\Table(name="llx_default_values", uniqueConstraints={@ORM\UniqueConstraint(name="uk_default_values", columns={"type", "entity", "user_id", "page", "param"})})
 * @ORM\Entity
 */
class LlxDefaultValues
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="page", type="string", length=255, nullable=true)
     */
    private $page;

    /**
     * @var string|null
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=true)
     */
    private $param;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=128, nullable=true)
     */
    private $value;


}
