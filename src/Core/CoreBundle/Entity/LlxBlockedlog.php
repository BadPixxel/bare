<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBlockedlog
 *
 * @ORM\Table(name="llx_blockedlog", indexes={@ORM\Index(name="signature", columns={"signature"}), @ORM\Index(name="fk_object_element", columns={"fk_object", "element"}), @ORM\Index(name="entity", columns={"entity"}), @ORM\Index(name="fk_user", columns={"fk_user"}), @ORM\Index(name="entity_action", columns={"entity", "action"}), @ORM\Index(name="entity_action_certified", columns={"entity", "action", "certified"})})
 * @ORM\Entity
 */
class LlxBlockedlog
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

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
     * @ORM\Column(name="action", type="string", length=50, nullable=true)
     */
    private $action;

    /**
     * @var float
     *
     * @ORM\Column(name="amounts", type="float", precision=24, scale=8, nullable=false)
     */
    private $amounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="element", type="string", length=50, nullable=true)
     */
    private $element;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_fullname", type="string", length=255, nullable=true)
     */
    private $userFullname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_object", type="integer", nullable=true)
     */
    private $fkObject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_object", type="string", length=255, nullable=true)
     */
    private $refObject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_object", type="datetime", nullable=true)
     */
    private $dateObject;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=100, nullable=false)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_line", type="string", length=100, nullable=false)
     */
    private $signatureLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="object_data", type="text", length=65535, nullable=true)
     */
    private $objectData;

    /**
     * @var int|null
     *
     * @ORM\Column(name="certified", type="integer", nullable=true)
     */
    private $certified;


}
