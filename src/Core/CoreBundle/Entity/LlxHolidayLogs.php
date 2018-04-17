<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxHolidayLogs
 *
 * @ORM\Table(name="llx_holiday_logs")
 * @ORM\Entity
 */
class LlxHolidayLogs
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
     * @ORM\Column(name="date_action", type="datetime", nullable=false)
     */
    private $dateAction;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_action", type="integer", nullable=false)
     */
    private $fkUserAction;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_update", type="integer", nullable=false)
     */
    private $fkUserUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_action", type="string", length=255, nullable=false)
     */
    private $typeAction;

    /**
     * @var string
     *
     * @ORM\Column(name="prev_solde", type="string", length=255, nullable=false)
     */
    private $prevSolde;

    /**
     * @var string
     *
     * @ORM\Column(name="new_solde", type="string", length=255, nullable=false)
     */
    private $newSolde;


}
