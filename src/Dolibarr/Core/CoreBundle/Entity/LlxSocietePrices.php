<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxSocietePrices
 *
 * @ORM\Table(name="llx_societe_prices")
 * @ORM\Entity
 */
class LlxSocietePrices
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
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="price_level", type="boolean", nullable=true, options={"default"="1"})
     */
    private $priceLevel = '1';


}
