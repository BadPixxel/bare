<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCFieldList
 *
 * @ORM\Table(name="llx_c_field_list")
 * @ORM\Entity
 */
class LlxCFieldList
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=64, nullable=false)
     */
    private $element;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=32, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=32, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="align", type="string", length=6, nullable=true, options={"default"="left"})
     */
    private $align = 'left';

    /**
     * @var bool
     *
     * @ORM\Column(name="sort", type="boolean", nullable=false, options={"default"="1"})
     */
    private $sort = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="search", type="boolean", nullable=false)
     */
    private $search = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $enabled = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';


}
