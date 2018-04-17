<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxContratdetLog
 *
 * @ORM\Table(name="llx_contratdet_log", indexes={@ORM\Index(name="idx_contratdet_log_fk_contratdet", columns={"fk_contratdet"}), @ORM\Index(name="idx_contratdet_log_date", columns={"date"})})
 * @ORM\Entity
 */
class LlxContratdetLog
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxContratdet
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxContratdet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_contratdet", referencedColumnName="rowid")
     * })
     */
    private $fkContratdet;


}
