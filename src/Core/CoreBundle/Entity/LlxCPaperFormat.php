<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCPaperFormat
 *
 * @ORM\Table(name="llx_c_paper_format")
 * @ORM\Entity
 */
class LlxCPaperFormat
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
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $width = '0.00';

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $height = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=5, nullable=false)
     */
    private $unit;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;


}
