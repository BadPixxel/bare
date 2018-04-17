<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUserRights
 *
 * @ORM\Table(name="llx_user_rights", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_rights", columns={"entity", "fk_user", "fk_id"})}, indexes={@ORM\Index(name="fk_user_rights_fk_user_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class LlxUserRights
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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;


}
