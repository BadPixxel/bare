<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCTypent
 *
 * @ORM\Table(name="llx_c_typent", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_typent", columns={"code"})})
 * @ORM\Entity
 */
class LlxCTypent
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
     * @ORM\Column(name="libelle", type="string", length=64, nullable=true)
     */
    private $libelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

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

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';


}
