<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBookmark
 *
 * @ORM\Table(name="llx_bookmark", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bookmark_url", columns={"fk_user", "url"}), @ORM\UniqueConstraint(name="uk_bookmark_title", columns={"fk_user", "title"})})
 * @ORM\Entity
 */
class LlxBookmark
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
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateb", type="datetime", nullable=true)
     */
    private $dateb;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", length=16, nullable=true)
     */
    private $target;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="favicon", type="string", length=24, nullable=true)
     */
    private $favicon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';


}
