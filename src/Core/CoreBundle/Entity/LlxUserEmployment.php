<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUserEmployment
 *
 * @ORM\Table(name="llx_user_employment", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_employment", columns={"ref", "entity"})}, indexes={@ORM\Index(name="fk_user_employment_fk_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class LlxUserEmployment
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=50, nullable=true)
     */
    private $refExt;

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
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=128, nullable=true)
     */
    private $job;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salary", type="float", precision=24, scale=8, nullable=true)
     */
    private $salary;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salaryextra", type="float", precision=24, scale=8, nullable=true)
     */
    private $salaryextra;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weeklyhours", type="float", precision=16, scale=8, nullable=true)
     */
    private $weeklyhours;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemployment", type="date", nullable=true)
     */
    private $dateemployment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemploymentend", type="date", nullable=true)
     */
    private $dateemploymentend;

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
