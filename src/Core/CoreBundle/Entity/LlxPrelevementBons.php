<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPrelevementBons
 *
 * @ORM\Table(name="llx_prelevement_bons", uniqueConstraints={@ORM\UniqueConstraint(name="uk_prelevement_bons_ref", columns={"ref", "entity"})})
 * @ORM\Entity
 */
class LlxPrelevementBons
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
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=12, nullable=true)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="credite", type="smallint", nullable=true)
     */
    private $credite = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_trans", type="datetime", nullable=true)
     */
    private $dateTrans;

    /**
     * @var int|null
     *
     * @ORM\Column(name="method_trans", type="smallint", nullable=true)
     */
    private $methodTrans;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_trans", type="integer", nullable=true)
     */
    private $fkUserTrans;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_credit", type="datetime", nullable=true)
     */
    private $dateCredit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_credit", type="integer", nullable=true)
     */
    private $fkUserCredit;


}
