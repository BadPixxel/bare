<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxMailingCibles
 *
 * @ORM\Table(name="llx_mailing_cibles", uniqueConstraints={@ORM\UniqueConstraint(name="uk_mailing_cibles", columns={"fk_mailing", "email"})}, indexes={@ORM\Index(name="idx_mailing_cibles_email", columns={"email"})})
 * @ORM\Entity
 */
class LlxMailingCibles
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
     * @ORM\Column(name="fk_mailing", type="integer", nullable=false)
     */
    private $fkMailing;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=false)
     */
    private $fkContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=160, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=160, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=160, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other", type="string", length=255, nullable=true)
     */
    private $other;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=128, nullable=true)
     */
    private $tag;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_url", type="string", length=255, nullable=true)
     */
    private $sourceUrl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="source_id", type="integer", nullable=true)
     */
    private $sourceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_type", type="string", length=16, nullable=true)
     */
    private $sourceType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="error_text", type="string", length=255, nullable=true)
     */
    private $errorText;


}
