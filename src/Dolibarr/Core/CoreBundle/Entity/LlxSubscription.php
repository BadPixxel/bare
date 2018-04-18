<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxSubscription
 *
 * @ORM\Table(name="llx_subscription", uniqueConstraints={@ORM\UniqueConstraint(name="uk_subscription", columns={"fk_adherent", "dateadh"})})
 * @ORM\Entity
 */
class LlxSubscription
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
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_adherent", type="integer", nullable=true)
     */
    private $fkAdherent;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateadh", type="datetime", nullable=true)
     */
    private $dateadh;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datef", type="date", nullable=true)
     */
    private $datef;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subscription", type="float", precision=24, scale=8, nullable=true)
     */
    private $subscription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}
