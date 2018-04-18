<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxLinks
 *
 * @ORM\Table(name="llx_links", uniqueConstraints={@ORM\UniqueConstraint(name="uk_links", columns={"objectid", "label"})})
 * @ORM\Entity
 */
class LlxLinks
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
     * @var \DateTime
     *
     * @ORM\Column(name="datea", type="datetime", nullable=false)
     */
    private $datea;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="objecttype", type="string", length=255, nullable=false)
     */
    private $objecttype;

    /**
     * @var int
     *
     * @ORM\Column(name="objectid", type="integer", nullable=false)
     */
    private $objectid;


}
