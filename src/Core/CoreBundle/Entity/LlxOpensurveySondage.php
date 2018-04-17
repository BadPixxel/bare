<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOpensurveySondage
 *
 * @ORM\Table(name="llx_opensurvey_sondage", indexes={@ORM\Index(name="idx_date_fin", columns={"date_fin"})})
 * @ORM\Entity
 */
class LlxOpensurveySondage
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSondage;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires", type="text", length=65535, nullable=true)
     */
    private $commentaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_admin", type="string", length=128, nullable=true)
     */
    private $mailAdmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_admin", type="string", length=64, nullable=true)
     */
    private $nomAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=2, nullable=false)
     */
    private $format;

    /**
     * @var bool
     *
     * @ORM\Column(name="mailsonde", type="boolean", nullable=false)
     */
    private $mailsonde = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_comments", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowComments = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_spy", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowSpy = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="text", length=65535, nullable=true)
     */
    private $sujet;


}
