<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUsergroupRights
 *
 * @ORM\Table(name="llx_usergroup_rights", uniqueConstraints={@ORM\UniqueConstraint(name="uk_usergroup_rights", columns={"entity", "fk_usergroup", "fk_id"})}, indexes={@ORM\Index(name="fk_usergroup_rights_fk_usergroup", columns={"fk_usergroup"})})
 * @ORM\Entity
 */
class LlxUsergroupRights
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
     * @var int
     *
     * @ORM\Column(name="fk_id", type="integer", nullable=false)
     */
    private $fkId;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUsergroup
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUsergroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_usergroup", referencedColumnName="rowid")
     * })
     */
    private $fkUsergroup;


}
