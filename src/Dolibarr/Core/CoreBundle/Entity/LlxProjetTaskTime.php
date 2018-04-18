<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxProjetTaskTime
 *
 * @ORM\Table(name="llx_projet_task_time", indexes={@ORM\Index(name="idx_projet_task_time_task", columns={"fk_task"}), @ORM\Index(name="idx_projet_task_time_date", columns={"task_date"}), @ORM\Index(name="idx_projet_task_time_datehour", columns={"task_datehour"})})
 * @ORM\Entity
 */
class LlxProjetTaskTime
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
     * @var int
     *
     * @ORM\Column(name="fk_task", type="integer", nullable=false)
     */
    private $fkTask;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_date", type="date", nullable=true)
     */
    private $taskDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_datehour", type="datetime", nullable=true)
     */
    private $taskDatehour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_date_withhour", type="integer", nullable=true)
     */
    private $taskDateWithhour = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="task_duration", type="float", precision=10, scale=0, nullable=true)
     */
    private $taskDuration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm", type="float", precision=24, scale=8, nullable=true)
     */
    private $thm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=true)
     */
    private $invoiceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_line_id", type="integer", nullable=true)
     */
    private $invoiceLineId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="date", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;


}
