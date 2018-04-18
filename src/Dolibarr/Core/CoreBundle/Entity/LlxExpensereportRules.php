<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExpensereportRules
 *
 * @ORM\Table(name="llx_expensereport_rules")
 * @ORM\Entity
 */
class LlxExpensereportRules
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
     * @var \DateTime
     *
     * @ORM\Column(name="dates", type="datetime", nullable=false)
     */
    private $dates;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datee", type="datetime", nullable=false)
     */
    private $datee;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

    /**
     * @var bool
     *
     * @ORM\Column(name="restrictive", type="boolean", nullable=false)
     */
    private $restrictive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_usergroup", type="integer", nullable=true)
     */
    private $fkUsergroup;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_type_fees", type="integer", nullable=false)
     */
    private $fkCTypeFees;

    /**
     * @var string
     *
     * @ORM\Column(name="code_expense_rules_type", type="string", length=50, nullable=false)
     */
    private $codeExpenseRulesType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_for_all", type="boolean", nullable=true)
     */
    private $isForAll = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = '1';


}
