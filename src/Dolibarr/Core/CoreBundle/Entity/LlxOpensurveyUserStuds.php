<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOpensurveyUserStuds
 *
 * @ORM\Table(name="llx_opensurvey_user_studs", indexes={@ORM\Index(name="idx_opensurvey_user_studs_id_users", columns={"id_users"}), @ORM\Index(name="idx_opensurvey_user_studs_nom", columns={"nom"}), @ORM\Index(name="idx_opensurvey_user_studs_id_sondage", columns={"id_sondage"})})
 * @ORM\Entity
 */
class LlxOpensurveyUserStuds
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_users", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=false)
     */
    private $idSondage;

    /**
     * @var string
     *
     * @ORM\Column(name="reponses", type="string", length=100, nullable=false)
     */
    private $reponses;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';


}
