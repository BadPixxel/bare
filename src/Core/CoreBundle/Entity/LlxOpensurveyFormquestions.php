<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOpensurveyFormquestions
 *
 * @ORM\Table(name="llx_opensurvey_formquestions")
 * @ORM\Entity
 */
class LlxOpensurveyFormquestions
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
     * @var string|null
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=true)
     */
    private $idSondage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=true)
     */
    private $question;

    /**
     * @var string|null
     *
     * @ORM\Column(name="available_answers", type="text", length=65535, nullable=true)
     */
    private $availableAnswers;


}
