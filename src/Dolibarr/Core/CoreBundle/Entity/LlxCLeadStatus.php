<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCLeadStatus
 *
 * @ORM\Table(name="llx_c_lead_status", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_lead_status_code", columns={"code"})})
 * @ORM\Entity
 */
class LlxCLeadStatus
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
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var float|null
     *
     * @ORM\Column(name="percent", type="float", precision=5, scale=2, nullable=true)
     */
    private $percent;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
