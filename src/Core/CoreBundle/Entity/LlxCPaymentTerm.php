<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCPaymentTerm
 *
 * @ORM\Table(name="llx_c_payment_term", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_payment_term_code", columns={"entity", "code"})})
 * @ORM\Entity
 */
class LlxCPaymentTerm
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
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="smallint", nullable=true)
     */
    private $sortorder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_facture", type="text", length=65535, nullable=true)
     */
    private $libelleFacture;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type_cdr", type="boolean", nullable=true)
     */
    private $typeCdr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbjour", type="smallint", nullable=true)
     */
    private $nbjour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="decalage", type="smallint", nullable=true)
     */
    private $decalage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';


}
