<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxOpensurveyUserFormanswers
 *
 * @ORM\Table(name="llx_opensurvey_user_formanswers")
 * @ORM\Entity
 */
class LlxOpensurveyUserFormanswers
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_survey", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fkUserSurvey;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_question", type="integer", nullable=false)
     */
    private $fkQuestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reponses", type="text", length=65535, nullable=true)
     */
    private $reponses;


}
