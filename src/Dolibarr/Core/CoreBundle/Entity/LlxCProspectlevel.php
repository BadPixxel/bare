<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCProspectlevel
 *
 * @ORM\Table(name="llx_c_prospectlevel")
 * @ORM\Entity
 */
class LlxCProspectlevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="smallint", nullable=true)
     */
    private $sortorder;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="smallint", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;


}
