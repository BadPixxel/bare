<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBank
 *
 * @ORM\Table(name="llx_bank", indexes={@ORM\Index(name="idx_bank_datev", columns={"datev"}), @ORM\Index(name="idx_bank_dateo", columns={"dateo"}), @ORM\Index(name="idx_bank_fk_account", columns={"fk_account"}), @ORM\Index(name="idx_bank_rappro", columns={"rappro"}), @ORM\Index(name="idx_bank_num_releve", columns={"num_releve"})})
 * @ORM\Entity
 */
class LlxBank
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datev", type="date", nullable=true)
     */
    private $datev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateo", type="date", nullable=true)
     */
    private $dateo;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = '0.00000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_rappro", type="integer", nullable=true)
     */
    private $fkUserRappro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_type", type="string", length=6, nullable=true)
     */
    private $fkType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_releve", type="string", length=50, nullable=true)
     */
    private $numReleve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_chq", type="string", length=50, nullable=true)
     */
    private $numChq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_compte", type="string", length=32, nullable=true)
     */
    private $numeroCompte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rappro", type="boolean", nullable=true)
     */
    private $rappro = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bordereau", type="integer", nullable=true)
     */
    private $fkBordereau = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="banque", type="string", length=255, nullable=true)
     */
    private $banque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emetteur", type="string", length=255, nullable=true)
     */
    private $emetteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author", type="string", length=40, nullable=true)
     */
    private $author;


}
