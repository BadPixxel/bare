<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEvents
 *
 * @ORM\Table(name="llx_events", indexes={@ORM\Index(name="idx_events_dateevent", columns={"dateevent"})})
 * @ORM\Entity
 */
class LlxEvents
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateevent", type="datetime", nullable=true)
     */
    private $dateevent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=250, nullable=false)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_object", type="integer", nullable=true)
     */
    private $fkObject;


}
