<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOverwriteTrans
 *
 * @ORM\Table(name="llx_overwrite_trans", uniqueConstraints={@ORM\UniqueConstraint(name="uk_overwrite_trans", columns={"lang", "transkey"})})
 * @ORM\Entity
 */
class LlxOverwriteTrans
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
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transkey", type="string", length=128, nullable=true)
     */
    private $transkey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transvalue", type="text", length=65535, nullable=true)
     */
    private $transvalue;


}
