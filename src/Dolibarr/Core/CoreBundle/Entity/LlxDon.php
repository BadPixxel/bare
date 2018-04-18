<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxDon
 *
 * @ORM\Table(name="llx_don")
 * @ORM\Entity
 */
class LlxDon
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
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=30, nullable=true)
     */
    private $ref;

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
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datedon", type="datetime", nullable=true)
     */
    private $datedon;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_payment", type="integer", nullable=true)
     */
    private $fkPayment;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="smallint", nullable=false)
     */
    private $paid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="societe", type="string", length=50, nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=true)
     */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=false)
     */
    private $fkCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=24, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_mobile", type="string", length=24, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var int
     *
     * @ORM\Column(name="public", type="smallint", nullable=false, options={"default"="1"})
     */
    private $public = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

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
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;


}
