<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOnlinesignature
 *
 * @ORM\Table(name="llx_onlinesignature")
 * @ORM\Entity
 */
class LlxOnlinesignature
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
     * @ORM\Column(name="object_type", type="string", length=32, nullable=false)
     */
    private $objectType;

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     */
    private $objectId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=128, nullable=true)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pathoffile", type="string", length=255, nullable=true)
     */
    private $pathoffile;


}
