<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCActionTrigger
 *
 * @ORM\Table(name="llx_c_action_trigger", uniqueConstraints={@ORM\UniqueConstraint(name="uk_action_trigger_code", columns={"code"})}, indexes={@ORM\Index(name="idx_action_trigger_rang", columns={"rang"})})
 * @ORM\Entity
 */
class LlxCActionTrigger
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
     * @ORM\Column(name="elementtype", type="string", length=24, nullable=false)
     */
    private $elementtype;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';


}
