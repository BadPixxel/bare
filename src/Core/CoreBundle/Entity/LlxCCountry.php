<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCCountry
 *
 * @ORM\Table(name="llx_c_country", uniqueConstraints={@ORM\UniqueConstraint(name="idx_c_country_code", columns={"code"}), @ORM\UniqueConstraint(name="idx_c_country_label", columns={"label"}), @ORM\UniqueConstraint(name="idx_c_country_code_iso", columns={"code_iso"})})
 * @ORM\Entity
 */
class LlxCCountry
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
     * @ORM\Column(name="code", type="string", length=2, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_iso", type="string", length=3, nullable=true)
     */
    private $codeIso;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="favorite", type="boolean", nullable=false)
     */
    private $favorite = '0';


}
