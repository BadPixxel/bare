<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCPropalst
 *
 * @ORM\Table(name="llx_c_propalst", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_propalst", columns={"code"})})
 * @ORM\Entity
 */
class LlxCPropalst
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=true)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';


}
