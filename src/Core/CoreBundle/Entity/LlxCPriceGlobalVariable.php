<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCPriceGlobalVariable
 *
 * @ORM\Table(name="llx_c_price_global_variable")
 * @ORM\Entity
 */
class LlxCPriceGlobalVariable
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
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $value = '0.00000000';


}
