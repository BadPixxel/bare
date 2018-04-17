<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEventElement
 *
 * @ORM\Table(name="llx_event_element")
 * @ORM\Entity
 */
class LlxEventElement
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
     * @ORM\Column(name="fk_source", type="integer", nullable=false)
     */
    private $fkSource;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_target", type="integer", nullable=false)
     */
    private $fkTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="targettype", type="string", length=32, nullable=false)
     */
    private $targettype;


}
