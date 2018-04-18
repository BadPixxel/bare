<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCActioncomm
 *
 * @ORM\Table(name="llx_c_actioncomm", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_actioncomm", columns={"code"})})
 * @ORM\Entity
 */
class LlxCActioncomm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false, options={"default"="system"})
     */
    private $type = 'system';

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=48, nullable=false)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=16, nullable=true)
     */
    private $module;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="todo", type="boolean", nullable=true)
     */
    private $todo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=9, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picto", type="string", length=48, nullable=true)
     */
    private $picto;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';


}
