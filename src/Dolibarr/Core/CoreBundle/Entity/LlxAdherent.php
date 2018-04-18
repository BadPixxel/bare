<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxAdherent
 *
 * @ORM\Table(name="llx_adherent", uniqueConstraints={@ORM\UniqueConstraint(name="uk_adherent_login", columns={"login", "entity"}), @ORM\UniqueConstraint(name="uk_adherent_fk_soc", columns={"fk_soc"})}, indexes={@ORM\Index(name="idx_adherent_fk_adherent_type", columns={"fk_adherent_type"})})
 * @ORM\Entity
 */
class LlxAdherent
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
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=128, nullable=true)
     */
    private $refExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civility", type="string", length=6, nullable=true)
     */
    private $civility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=true)
     */
    private $pass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_crypted", type="string", length=128, nullable=true)
     */
    private $passCrypted;

    /**
     * @var string
     *
     * @ORM\Column(name="morphy", type="string", length=3, nullable=false)
     */
    private $morphy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="societe", type="string", length=128, nullable=true)
     */
    private $societe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=30, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="town", type="string", length=50, nullable=true)
     */
    private $town;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state_id", type="integer", nullable=true)
     */
    private $stateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="country", type="integer", nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=true)
     */
    private $skype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_perso", type="string", length=30, nullable=true)
     */
    private $phonePerso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_mobile", type="string", length=30, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth", type="date", nullable=true)
     */
    private $birth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="public", type="smallint", nullable=false)
     */
    private $public = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=true)
     */
    private $datefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datevalid", type="datetime", nullable=true)
     */
    private $datevalid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=true)
     */
    private $fkUserMod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="canvas", type="string", length=32, nullable=true)
     */
    private $canvas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxSociete
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxSociete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxAdherentType
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxAdherentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_adherent_type", referencedColumnName="rowid")
     * })
     */
    private $fkAdherentType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie", mappedBy="fkMember")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
