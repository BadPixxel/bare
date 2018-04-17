<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCHolidayTypes
 *
 * @ORM\Table(name="llx_c_holiday_types", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_holiday_types", columns={"code"})})
 * @ORM\Entity
 */
class LlxCHolidayTypes
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
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="affect", type="integer", nullable=false)
     */
    private $affect;

    /**
     * @var int
     *
     * @ORM\Column(name="delay", type="integer", nullable=false)
     */
    private $delay;

    /**
     * @var float
     *
     * @ORM\Column(name="newByMonth", type="float", precision=8, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $newbymonth = '0.00000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"="1"})
     */
    private $active = '1';


}
