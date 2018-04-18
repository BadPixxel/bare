<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOpensurveyComments
 *
 * @ORM\Table(name="llx_opensurvey_comments", indexes={@ORM\Index(name="idx_id_comment", columns={"id_comment"}), @ORM\Index(name="idx_id_sondage", columns={"id_sondage"})})
 * @ORM\Entity
 */
class LlxOpensurveyComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=false, options={"fixed"=true})
     */
    private $idSondage;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="usercomment", type="text", length=65535, nullable=true)
     */
    private $usercomment;


}
