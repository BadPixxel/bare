<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxHolidayUsers
 *
 * @ORM\Table(name="llx_holiday_users", uniqueConstraints={@ORM\UniqueConstraint(name="uk_holiday_users", columns={"fk_user", "fk_type", "nb_holiday"})})
 * @ORM\Entity
 */
class LlxHolidayUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var float
     *
     * @ORM\Column(name="nb_holiday", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbHoliday = '0';


}
