<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBoxes
 *
 * @ORM\Table(name="llx_boxes", uniqueConstraints={@ORM\UniqueConstraint(name="uk_boxes", columns={"entity", "box_id", "position", "fk_user"})}, indexes={@ORM\Index(name="idx_boxes_boxid", columns={"box_id"}), @ORM\Index(name="idx_boxes_fk_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class LlxBoxes
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="box_order", type="string", length=3, nullable=false)
     */
    private $boxOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxline", type="integer", nullable=true)
     */
    private $maxline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params", type="string", length=255, nullable=true)
     */
    private $params;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxBoxesDef
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxBoxesDef")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="box_id", referencedColumnName="rowid")
     * })
     */
    private $box;


}
