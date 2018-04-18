<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCInputMethod
 *
 * @ORM\Table(name="llx_c_input_method", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_input_method", columns={"code"})})
 * @ORM\Entity
 */
class LlxCInputMethod
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
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=30, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=60, nullable=true)
     */
    private $libelle;

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
