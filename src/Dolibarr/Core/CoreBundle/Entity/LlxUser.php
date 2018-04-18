<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUser
 *
 * @ORM\Table(name="llx_user", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_login", columns={"login", "entity"}), @ORM\UniqueConstraint(name="uk_user_fk_socpeople", columns={"fk_socpeople"}), @ORM\UniqueConstraint(name="uk_user_fk_member", columns={"fk_member"}), @ORM\UniqueConstraint(name="uk_user_api_key", columns={"api_key"})}, indexes={@ORM\Index(name="idx_user_fk_societe", columns={"fk_soc"})})
 * @ORM\Entity
 */
class LlxUser
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
     * @ORM\Column(name="ref_ext", type="string", length=50, nullable=true)
     */
    private $refExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_int", type="string", length=50, nullable=true)
     */
    private $refInt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="employee", type="boolean", nullable=true, options={"default"="1"})
     */
    private $employee = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_establishment", type="integer", nullable=true)
     */
    private $fkEstablishment = '0';

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
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_encoding", type="string", length=24, nullable=true)
     */
    private $passEncoding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=128, nullable=true)
     */
    private $pass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_crypted", type="string", length=128, nullable=true)
     */
    private $passCrypted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_temp", type="string", length=128, nullable=true)
     */
    private $passTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_key", type="string", length=128, nullable=true)
     */
    private $apiKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

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
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=25, nullable=true)
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
     * @ORM\Column(name="fk_state", type="integer", nullable=true)
     */
    private $fkState = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth", type="date", nullable=true)
     */
    private $birth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=128, nullable=true)
     */
    private $job;

    /**
     * @var string|null
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=true)
     */
    private $skype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="office_phone", type="string", length=20, nullable=true)
     */
    private $officePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="office_fax", type="string", length=20, nullable=true)
     */
    private $officeFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_mobile", type="string", length=20, nullable=true)
     */
    private $userMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    /**
     * @var int|null
     *
     * @ORM\Column(name="admin", type="smallint", nullable=true)
     */
    private $admin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="module_comm", type="smallint", nullable=true, options={"default"="1"})
     */
    private $moduleComm = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="module_compta", type="smallint", nullable=true, options={"default"="1"})
     */
    private $moduleCompta = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_socpeople", type="integer", nullable=true)
     */
    private $fkSocpeople;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_member", type="integer", nullable=true)
     */
    private $fkMember;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastlogin", type="datetime", nullable=true)
     */
    private $datelastlogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datepreviouslogin", type="datetime", nullable=true)
     */
    private $datepreviouslogin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="egroupware_id", type="integer", nullable=true)
     */
    private $egroupwareId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ldap_sid", type="string", length=255, nullable=true)
     */
    private $ldapSid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="openid", type="string", length=255, nullable=true)
     */
    private $openid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true, options={"default"="1"})
     */
    private $statut = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=6, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=255, nullable=true)
     */
    private $barcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_barcode_type", type="integer", nullable=true)
     */
    private $fkBarcodeType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code", type="string", length=32, nullable=true)
     */
    private $accountancyCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_holiday", type="integer", nullable=true)
     */
    private $nbHoliday = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm", type="float", precision=24, scale=8, nullable=true)
     */
    private $thm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tjm", type="float", precision=24, scale=8, nullable=true)
     */
    private $tjm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salary", type="float", precision=24, scale=8, nullable=true)
     */
    private $salary;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salaryextra", type="float", precision=24, scale=8, nullable=true)
     */
    private $salaryextra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemployment", type="date", nullable=true)
     */
    private $dateemployment;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weeklyhours", type="float", precision=16, scale=8, nullable=true)
     */
    private $weeklyhours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_range", type="integer", nullable=true)
     */
    private $defaultRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_c_exp_tax_cat", type="integer", nullable=true)
     */
    private $defaultCExpTaxCat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie", mappedBy="fkUser")
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
