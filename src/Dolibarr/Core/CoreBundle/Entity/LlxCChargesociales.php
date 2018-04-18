<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCChargesociales
 *
 * @ORM\Table(name="llx_c_chargesociales")
 * @ORM\Entity
 */
class LlxCChargesociales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=80, nullable=true)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="deductible", type="smallint", nullable=false)
     */
    private $deductible = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code", type="string", length=32, nullable=true)
     */
    private $accountancyCode;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkPays = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;


}
