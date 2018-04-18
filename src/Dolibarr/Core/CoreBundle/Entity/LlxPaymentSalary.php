<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPaymentSalary
 *
 * @ORM\Table(name="llx_payment_salary", indexes={@ORM\Index(name="idx_payment_salary_ref", columns={"num_payment"}), @ORM\Index(name="idx_payment_salary_user", columns={"fk_user", "entity"}), @ORM\Index(name="idx_payment_salary_datep", columns={"datep"}), @ORM\Index(name="idx_payment_salary_datesp", columns={"datesp"}), @ORM\Index(name="idx_payment_salary_dateep", columns={"dateep"}), @ORM\Index(name="IDX_6C2013911AD0877", columns={"fk_user"})})
 * @ORM\Entity
 */
class LlxPaymentSalary
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep", type="date", nullable=true)
     */
    private $datep;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datev", type="date", nullable=true)
     */
    private $datev;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salary", type="float", precision=24, scale=8, nullable=true)
     */
    private $salary;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_typepayment", type="integer", nullable=false)
     */
    private $fkTypepayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_payment", type="string", length=50, nullable=true)
     */
    private $numPayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datesp", type="date", nullable=true)
     */
    private $datesp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateep", type="date", nullable=true)
     */
    private $dateep;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;


}
