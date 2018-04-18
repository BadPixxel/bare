<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOauthState
 *
 * @ORM\Table(name="llx_oauth_state")
 * @ORM\Entity
 */
class LlxOauthState
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
     * @ORM\Column(name="state", type="string", length=128, nullable=true)
     */
    private $state;

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
