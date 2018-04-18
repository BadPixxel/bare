<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxWebsitePage
 *
 * @ORM\Table(name="llx_website_page", uniqueConstraints={@ORM\UniqueConstraint(name="uk_website_page_url", columns={"fk_website", "pageurl"})}, indexes={@ORM\Index(name="IDX_EF052F11B74060CB", columns={"fk_website"})})
 * @ORM\Entity
 */
class LlxWebsitePage
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
     * @ORM\Column(name="pageurl", type="string", length=255, nullable=false)
     */
    private $pageurl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasalt", type="string", length=255, nullable=true)
     */
    private $aliasalt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=6, nullable=true)
     */
    private $lang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_page", type="integer", nullable=true)
     */
    private $fkPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="htmlheader", type="text", length=65535, nullable=true)
     */
    private $htmlheader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grabbed_from", type="string", length=255, nullable=true)
     */
    private $grabbedFrom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxWebsite
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxWebsite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_website", referencedColumnName="rowid")
     * })
     */
    private $fkWebsite;


}
