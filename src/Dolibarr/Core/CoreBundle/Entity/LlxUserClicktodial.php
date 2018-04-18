<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUserClicktodial
 *
 * @ORM\Table(name="llx_user_clicktodial")
 * @ORM\Entity
 */
class LlxUserClicktodial
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=32, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=64, nullable=true)
     */
    private $pass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poste", type="string", length=20, nullable=true)
     */
    private $poste;


}
