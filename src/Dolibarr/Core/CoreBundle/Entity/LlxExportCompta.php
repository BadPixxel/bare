<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExportCompta
 *
 * @ORM\Table(name="llx_export_compta")
 * @ORM\Entity
 */
class LlxExportCompta
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
     * @ORM\Column(name="ref", type="string", length=12, nullable=false)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_export", type="datetime", nullable=false)
     */
    private $dateExport;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}
