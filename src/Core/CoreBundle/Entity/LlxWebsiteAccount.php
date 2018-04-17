<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxWebsiteAccount
 *
 * @ORM\Table(name="llx_website_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_website_account_login_website_soc", columns={"login", "fk_website", "fk_soc"})}, indexes={@ORM\Index(name="idx_website_account_rowid", columns={"rowid"}), @ORM\Index(name="idx_website_account_login", columns={"login"}), @ORM\Index(name="idx_website_account_status", columns={"status"}), @ORM\Index(name="idx_website_account_fk_website", columns={"fk_website"}), @ORM\Index(name="idx_website_account_fk_soc", columns={"fk_soc"})})
 * @ORM\Entity
 */
class LlxWebsiteAccount
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
     * @ORM\Column(name="login", type="string", length=64, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_encoding", type="string", length=24, nullable=false)
     */
    private $passEncoding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_crypted", type="string", length=128, nullable=true)
     */
    private $passCrypted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_temp", type="string", length=128, nullable=true)
     */
    private $passTemp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_login", type="datetime", nullable=true)
     */
    private $dateLastLogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_previous_login", type="datetime", nullable=true)
     */
    private $datePreviousLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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
