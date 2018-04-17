<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExtrafields
 *
 * @ORM\Table(name="llx_extrafields", uniqueConstraints={@ORM\UniqueConstraint(name="uk_extrafields_name", columns={"name", "entity", "elementtype"})})
 * @ORM\Entity
 */
class LlxExtrafields
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="elementtype", type="string", length=64, nullable=false, options={"default"="member"})
     */
    private $elementtype = 'member';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=8, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="size", type="string", length=8, nullable=true)
     */
    private $size;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fieldcomputed", type="text", length=65535, nullable=true)
     */
    private $fieldcomputed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fielddefault", type="string", length=255, nullable=true)
     */
    private $fielddefault;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fieldunique", type="integer", nullable=true)
     */
    private $fieldunique = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fieldrequired", type="integer", nullable=true)
     */
    private $fieldrequired = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perms", type="string", length=255, nullable=true)
     */
    private $perms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="string", length=255, nullable=true)
     */
    private $enabled;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="alwayseditable", type="integer", nullable=true)
     */
    private $alwayseditable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param", type="text", length=65535, nullable=true)
     */
    private $param;

    /**
     * @var int|null
     *
     * @ORM\Column(name="list", type="integer", nullable=true, options={"default"="1"})
     */
    private $list = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="langs", type="string", length=64, nullable=true)
     */
    private $langs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
