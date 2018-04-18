<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAccountingJournal
 *
 * @ORM\Table(name="llx_accounting_journal", uniqueConstraints={@ORM\UniqueConstraint(name="uk_accounting_journal_code", columns={"code"})})
 * @ORM\Entity
 */
class LlxAccountingJournal
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="nature", type="smallint", nullable=false, options={"default"="1"})
     */
    private $nature = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="smallint", nullable=true)
     */
    private $active = '0';


}
