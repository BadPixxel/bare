<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCAvailability
 *
 * @ORM\Table(name="llx_c_availability", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_availability", columns={"code"})})
 * @ORM\Entity
 */
class LlxCAvailability
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
     * @ORM\Column(name="code", type="string", length=30, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=60, nullable=false)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
