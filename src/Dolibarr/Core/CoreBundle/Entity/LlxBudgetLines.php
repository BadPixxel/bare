<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBudgetLines
 *
 * @ORM\Table(name="llx_budget_lines", uniqueConstraints={@ORM\UniqueConstraint(name="uk_budget_lines", columns={"fk_budget", "fk_project_ids"})}, indexes={@ORM\Index(name="IDX_DD1A6925535C9FEB", columns={"fk_budget"})})
 * @ORM\Entity
 */
class LlxBudgetLines
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
     * @ORM\Column(name="fk_project_ids", type="string", length=180, nullable=false)
     */
    private $fkProjectIds;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_key", type="integer", nullable=true)
     */
    private $importKey;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxBudget
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxBudget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_budget", referencedColumnName="rowid")
     * })
     */
    private $fkBudget;


}
