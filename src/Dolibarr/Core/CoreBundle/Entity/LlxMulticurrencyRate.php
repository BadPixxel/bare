<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxMulticurrencyRate
 *
 * @ORM\Table(name="llx_multicurrency_rate")
 * @ORM\Entity
 */
class LlxMulticurrencyRate
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
     * @ORM\Column(name="date_sync", type="datetime", nullable=true)
     */
    private $dateSync;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=false)
     */
    private $fkMulticurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = '1';


}
