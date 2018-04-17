<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxActioncommResources
 *
 * @ORM\Table(name="llx_actioncomm_resources", uniqueConstraints={@ORM\UniqueConstraint(name="uk_actioncomm_resources", columns={"fk_actioncomm", "element_type", "fk_element"})}, indexes={@ORM\Index(name="idx_actioncomm_resources_fk_element", columns={"fk_element"})})
 * @ORM\Entity
 */
class LlxActioncommResources
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
     * @ORM\Column(name="fk_actioncomm", type="integer", nullable=false)
     */
    private $fkActioncomm;

    /**
     * @var string
     *
     * @ORM\Column(name="element_type", type="string", length=50, nullable=false)
     */
    private $elementType;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_element", type="integer", nullable=false)
     */
    private $fkElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_status", type="string", length=50, nullable=true)
     */
    private $answerStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mandatory", type="smallint", nullable=true)
     */
    private $mandatory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transparency", type="smallint", nullable=true, options={"default"="1"})
     */
    private $transparency = '1';


}
