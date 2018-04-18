<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOauthToken
 *
 * @ORM\Table(name="llx_oauth_token")
 * @ORM\Entity
 */
class LlxOauthToken
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
     * @ORM\Column(name="service", type="string", length=36, nullable=true)
     */
    private $service;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="text", length=65535, nullable=true)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tokenstring", type="text", length=65535, nullable=true)
     */
    private $tokenstring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_adherent", type="integer", nullable=true)
     */
    private $fkAdherent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = '1';


}
