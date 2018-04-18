<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxActioncommReminder
 *
 * @ORM\Table(name="llx_actioncomm_reminder", uniqueConstraints={@ORM\UniqueConstraint(name="uk_actioncomm_reminder_unique", columns={"fk_user", "typeremind", "offsetvalue", "offsetunit"})}, indexes={@ORM\Index(name="idx_actioncomm_reminder_rowid", columns={"rowid"}), @ORM\Index(name="idx_actioncomm_reminder_dateremind", columns={"dateremind"}), @ORM\Index(name="idx_actioncomm_reminder_fk_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class LlxActioncommReminder
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
     * @ORM\Column(name="dateremind", type="datetime", nullable=false)
     */
    private $dateremind;

    /**
     * @var string
     *
     * @ORM\Column(name="typeremind", type="string", length=32, nullable=false)
     */
    private $typeremind;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="offsetvalue", type="integer", nullable=false)
     */
    private $offsetvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="offsetunit", type="string", length=1, nullable=false)
     */
    private $offsetunit;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';


}
