<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPropaldetExtrafields
 *
 * @ORM\Table(name="llx_propaldet_extrafields", indexes={@ORM\Index(name="idx_propaldet_extrafields", columns={"fk_object"})})
 * @ORM\Entity
 */
class LlxPropaldetExtrafields
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
     * @var int
     *
     * @ORM\Column(name="fk_object", type="integer", nullable=false)
     */
    private $fkObject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
