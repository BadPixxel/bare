<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxNotify
 *
 * @ORM\Table(name="llx_notify")
 * @ORM\Entity
 */
class LlxNotify
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="daten", type="datetime", nullable=true)
     */
    private $daten;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_action", type="integer", nullable=false)
     */
    private $fkAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=true)
     */
    private $fkContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=true, options={"default"="email"})
     */
    private $type = 'email';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_target", type="string", length=16, nullable=true)
     */
    private $typeTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_type", type="string", length=24, nullable=false)
     */
    private $objetType;

    /**
     * @var int
     *
     * @ORM\Column(name="objet_id", type="integer", nullable=false)
     */
    private $objetId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


}
