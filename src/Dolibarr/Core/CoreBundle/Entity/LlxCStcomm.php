<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCStcomm
 *
 * @ORM\Table(name="llx_c_stcomm", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_stcomm", columns={"code"})})
 * @ORM\Entity
 */
class LlxCStcomm
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
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=30, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picto", type="string", length=128, nullable=true)
     */
    private $picto;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
