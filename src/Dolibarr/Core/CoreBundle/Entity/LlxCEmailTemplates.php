<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCEmailTemplates
 *
 * @ORM\Table(name="llx_c_email_templates", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_email_templates", columns={"entity", "label", "lang"})}, indexes={@ORM\Index(name="idx_type", columns={"type_template"})})
 * @ORM\Entity
 */
class LlxCEmailTemplates
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
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_template", type="string", length=32, nullable=true)
     */
    private $typeTemplate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=6, nullable=true)
     */
    private $lang = '';

    /**
     * @var int
     *
     * @ORM\Column(name="private", type="smallint", nullable=false)
     */
    private $private = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=180, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="smallint", nullable=true)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $enabled = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="topic", type="text", length=65535, nullable=true)
     */
    private $topic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joinfiles", type="text", length=65535, nullable=true)
     */
    private $joinfiles;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_lines", type="text", length=65535, nullable=true)
     */
    private $contentLines;


}
