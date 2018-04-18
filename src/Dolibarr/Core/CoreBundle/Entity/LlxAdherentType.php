<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAdherentType
 *
 * @ORM\Table(name="llx_adherent_type", uniqueConstraints={@ORM\UniqueConstraint(name="uk_adherent_type_libelle", columns={"libelle", "entity"})})
 * @ORM\Entity
 */
class LlxAdherentType
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription", type="string", length=3, nullable=false, options={"default"="yes"})
     */
    private $subscription = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="vote", type="string", length=3, nullable=false, options={"default"="yes"})
     */
    private $vote = 'yes';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_valid", type="text", length=65535, nullable=true)
     */
    private $mailValid;


}
