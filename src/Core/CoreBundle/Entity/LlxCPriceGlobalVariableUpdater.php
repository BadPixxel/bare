<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCPriceGlobalVariableUpdater
 *
 * @ORM\Table(name="llx_c_price_global_variable_updater")
 * @ORM\Entity
 */
class LlxCPriceGlobalVariableUpdater
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
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parameters", type="text", length=65535, nullable=true)
     */
    private $parameters;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_variable", type="integer", nullable=false)
     */
    private $fkVariable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="update_interval", type="integer", nullable=true)
     */
    private $updateInterval = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="next_update", type="integer", nullable=true)
     */
    private $nextUpdate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_status", type="text", length=65535, nullable=true)
     */
    private $lastStatus;


}
