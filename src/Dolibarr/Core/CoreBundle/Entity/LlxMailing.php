<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxMailing
 *
 * @ORM\Table(name="llx_mailing")
 * @ORM\Entity
 */
class LlxMailing
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
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=128, nullable=true)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="string", length=128, nullable=true)
     */
    private $sujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=16777215, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bgcolor", type="string", length=8, nullable=true)
     */
    private $bgcolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bgimage", type="string", length=255, nullable=true)
     */
    private $bgimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cible", type="string", length=60, nullable=true)
     */
    private $cible;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbemail", type="integer", nullable=true)
     */
    private $nbemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", length=160, nullable=true)
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_replyto", type="string", length=160, nullable=true)
     */
    private $emailReplyto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_errorsto", type="string", length=160, nullable=true)
     */
    private $emailErrorsto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=128, nullable=true)
     */
    private $tag;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creat", type="datetime", nullable=true)
     */
    private $dateCreat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_appro", type="datetime", nullable=true)
     */
    private $dateAppro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_appro", type="integer", nullable=true)
     */
    private $fkUserAppro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file1", type="string", length=255, nullable=true)
     */
    private $joinedFile1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file2", type="string", length=255, nullable=true)
     */
    private $joinedFile2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file3", type="string", length=255, nullable=true)
     */
    private $joinedFile3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file4", type="string", length=255, nullable=true)
     */
    private $joinedFile4;


}
