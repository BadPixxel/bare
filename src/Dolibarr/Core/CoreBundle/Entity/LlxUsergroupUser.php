<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUsergroupUser
 *
 * @ORM\Table(name="llx_usergroup_user", uniqueConstraints={@ORM\UniqueConstraint(name="uk_usergroup_user", columns={"entity", "fk_user", "fk_usergroup"})}, indexes={@ORM\Index(name="fk_usergroup_user_fk_user", columns={"fk_user"}), @ORM\Index(name="fk_usergroup_user_fk_usergroup", columns={"fk_usergroup"})})
 * @ORM\Entity
 */
class LlxUsergroupUser
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
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;

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
