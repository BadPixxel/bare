<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxElementElement
 *
 * @ORM\Table(name="llx_element_element", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_element_idx1", columns={"fk_source", "sourcetype", "fk_target", "targettype"})}, indexes={@ORM\Index(name="idx_element_element_fk_target", columns={"fk_target"})})
 * @ORM\Entity
 */
class LlxElementElement
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
     * @var string
     *
     * @ORM\Column(name="sourcetype", type="string", length=32, nullable=false)
     */
    private $sourcetype;

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
