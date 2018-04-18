<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxSocieteLog
 *
 * @ORM\Table(name="llx_societe_log")
 * @ORM\Entity
 */
class LlxSocieteLog
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datel", type="datetime", nullable=true)
     */
    private $datel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=true)
     */
    private $fkStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author", type="string", length=30, nullable=true)
     */
    private $author;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=true)
     */
    private $label;


}
