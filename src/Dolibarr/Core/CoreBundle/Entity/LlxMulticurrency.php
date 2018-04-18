<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxMulticurrency
 *
 * @ORM\Table(name="llx_multicurrency")
 * @ORM\Entity
 */
class LlxMulticurrency
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=true)
     */
    private $dateCreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;


}
