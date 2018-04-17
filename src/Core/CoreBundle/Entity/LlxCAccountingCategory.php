<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCAccountingCategory
 *
 * @ORM\Table(name="llx_c_accounting_category", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_accounting_category", columns={"code"})})
 * @ORM\Entity
 */
class LlxCAccountingCategory
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
     * @var string
     *
     * @ORM\Column(name="range_account", type="string", length=255, nullable=false)
     */
    private $rangeAccount;

    /**
     * @var bool
     *
     * @ORM\Column(name="sens", type="boolean", nullable=false)
     */
    private $sens = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_type", type="boolean", nullable=false)
     */
    private $categoryType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=255, nullable=false)
     */
    private $formula;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';

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
