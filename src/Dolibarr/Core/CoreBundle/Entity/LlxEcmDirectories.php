<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEcmDirectories
 *
 * @ORM\Table(name="llx_ecm_directories", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ecm_directories", columns={"label", "fk_parent", "entity"})}, indexes={@ORM\Index(name="idx_ecm_directories_fk_user_c", columns={"fk_user_c"}), @ORM\Index(name="idx_ecm_directories_fk_user_m", columns={"fk_user_m"})})
 * @ORM\Entity
 */
class LlxEcmDirectories
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=true)
     */
    private $fkParent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="cachenbofdoc", type="integer", nullable=false)
     */
    private $cachenbofdoc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullpath", type="string", length=750, nullable=true)
     */
    private $fullpath;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_c", type="datetime", nullable=true)
     */
    private $dateC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_m", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateM = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acl", type="text", length=65535, nullable=true)
     */
    private $acl;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_c", referencedColumnName="rowid")
     * })
     */
    private $fkUserC;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxUser
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_m", referencedColumnName="rowid")
     * })
     */
    private $fkUserM;


}
