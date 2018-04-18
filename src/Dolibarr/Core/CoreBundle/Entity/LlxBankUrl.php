<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBankUrl
 *
 * @ORM\Table(name="llx_bank_url", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_url", columns={"fk_bank", "type"})})
 * @ORM\Entity
 */
class LlxBankUrl
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
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="url_id", type="integer", nullable=true)
     */
    private $urlId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=24, nullable=false)
     */
    private $type;


}
