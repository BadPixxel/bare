<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCHrmFunction
 *
 * @ORM\Table(name="llx_c_hrm_function")
 * @ORM\Entity
 */
class LlxCHrmFunction
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
     * @var bool
     *
     * @ORM\Column(name="pos", type="boolean", nullable=false)
     */
    private $pos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="c_level", type="boolean", nullable=false)
     */
    private $cLevel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
