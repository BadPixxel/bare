<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCCurrencies
 *
 * @ORM\Table(name="llx_c_currencies", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_currencies_code_iso", columns={"code_iso"})})
 * @ORM\Entity
 */
class LlxCCurrencies
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_iso", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeIso;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unicode", type="string", length=32, nullable=true)
     */
    private $unicode;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
