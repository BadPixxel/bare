<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxElementContact
 *
 * @ORM\Table(name="llx_element_contact", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_contact_idx1", columns={"element_id", "fk_c_type_contact", "fk_socpeople"})}, indexes={@ORM\Index(name="fk_element_contact_fk_c_type_contact", columns={"fk_c_type_contact"}), @ORM\Index(name="idx_element_contact_fk_socpeople", columns={"fk_socpeople"})})
 * @ORM\Entity
 */
class LlxElementContact
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true, options={"default"="5"})
     */
    private $statut = '5';

    /**
     * @var int
     *
     * @ORM\Column(name="element_id", type="integer", nullable=false)
     */
    private $elementId;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_socpeople", type="integer", nullable=false)
     */
    private $fkSocpeople;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCTypeContact
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCTypeContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_c_type_contact", referencedColumnName="rowid")
     * })
     */
    private $fkCTypeContact;


}
