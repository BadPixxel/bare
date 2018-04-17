<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPrinting
 *
 * @ORM\Table(name="llx_printing")
 * @ORM\Entity
 */
class LlxPrinting
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_name", type="text", length=65535, nullable=false)
     */
    private $printerName;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_location", type="text", length=65535, nullable=false)
     */
    private $printerLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_id", type="string", length=255, nullable=false)
     */
    private $printerId;

    /**
     * @var int
     *
     * @ORM\Column(name="copy", type="integer", nullable=false, options={"default"="1"})
     */
    private $copy = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=16, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="driver", type="string", length=16, nullable=false)
     */
    private $driver;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid;


}
