<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCategorie
 *
 * @ORM\Table(name="llx_categorie", uniqueConstraints={@ORM\UniqueConstraint(name="uk_categorie_ref", columns={"entity", "fk_parent", "label", "type"})}, indexes={@ORM\Index(name="idx_categorie_type", columns={"type"}), @ORM\Index(name="idx_categorie_label", columns={"label"})})
 * @ORM\Entity
 */
class LlxCategorie
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
     * @ORM\Column(name="fk_parent", type="integer", nullable=false)
     */
    private $fkParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=180, nullable=false)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false, options={"default"="1"})
     */
    private $type = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_assigned_soc", type="integer", nullable=true)
     */
    private $fkAssignedSoc;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxBankAccount", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_account",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_account", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkAccount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSocpeople", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_contact",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_socpeople", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkSocpeople;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete", inversedBy="fkFournCategorie")
     * @ORM\JoinTable(name="llx_categorie_fournisseur",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_fourn_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_fourn", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkFourn;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxAdherent", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_member",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_member", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkMember;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProduct", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_product",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_product", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkProduct;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxProjet", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_project",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_project", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkProject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_societe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkSoc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxUser", inversedBy="fkCategorie")
     * @ORM\JoinTable(name="llx_categorie_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_categorie", referencedColumnName="rowid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     *   }
     * )
     */
    private $fkUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkAccount = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkSocpeople = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkFourn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkMember = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkProduct = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkProject = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkSoc = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
