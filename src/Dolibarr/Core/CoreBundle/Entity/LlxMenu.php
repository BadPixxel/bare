<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxMenu
 *
 * @ORM\Table(name="llx_menu", uniqueConstraints={@ORM\UniqueConstraint(name="idx_menu_uk_menu", columns={"menu_handler", "fk_menu", "position", "url", "entity"})}, indexes={@ORM\Index(name="idx_menu_menuhandler_type", columns={"menu_handler", "type"})})
 * @ORM\Entity
 */
class LlxMenu
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
     * @ORM\Column(name="menu_handler", type="string", length=16, nullable=false)
     */
    private $menuHandler;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=64, nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=4, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="mainmenu", type="string", length=100, nullable=false)
     */
    private $mainmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="leftmenu", type="string", length=100, nullable=true)
     */
    private $leftmenu;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_menu", type="integer", nullable=false)
     */
    private $fkMenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_mainmenu", type="string", length=100, nullable=true)
     */
    private $fkMainmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_leftmenu", type="string", length=100, nullable=true)
     */
    private $fkLeftmenu;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", length=100, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langs", type="string", length=100, nullable=true)
     */
    private $langs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="perms", type="text", length=65535, nullable=true)
     */
    private $perms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $enabled = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="usertype", type="integer", nullable=false)
     */
    private $usertype = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
