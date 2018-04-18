<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBlockedlogAuthority
 *
 * @ORM\Table(name="llx_blockedlog_authority", indexes={@ORM\Index(name="signature", columns={"signature"})})
 * @ORM\Entity
 */
class LlxBlockedlogAuthority
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
     * @ORM\Column(name="blockchain", type="text", nullable=false)
     */
    private $blockchain;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=100, nullable=false)
     */
    private $signature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
