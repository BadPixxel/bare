<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAdvtargetemailing
 *
 * @ORM\Table(name="llx_advtargetemailing", uniqueConstraints={@ORM\UniqueConstraint(name="uk_advtargetemailing_name", columns={"name"})})
 * @ORM\Entity
 */
class LlxAdvtargetemailing
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=180, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_mailing", type="integer", nullable=false)
     */
    private $fkMailing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filtervalue", type="text", length=65535, nullable=true)
     */
    private $filtervalue;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=false)
     */
    private $fkUserMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
