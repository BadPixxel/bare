<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxNotifyDefObject
 *
 * @ORM\Table(name="llx_notify_def_object")
 * @ORM\Entity
 */
class LlxNotifyDefObject
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
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="objet_type", type="string", length=16, nullable=true)
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
     * @ORM\Column(name="type_notif", type="string", length=16, nullable=true, options={"default"="browser"})
     */
    private $typeNotif = 'browser';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_notif", type="datetime", nullable=true)
     */
    private $dateNotif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moreparam", type="string", length=255, nullable=true)
     */
    private $moreparam;


}
