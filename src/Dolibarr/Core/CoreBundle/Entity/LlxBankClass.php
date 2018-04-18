<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxBankClass
 *
 * @ORM\Table(name="llx_bank_class", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_class_lineid", columns={"lineid", "fk_categ"})})
 * @ORM\Entity
 */
class LlxBankClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="lineid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lineid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_categ", type="integer", nullable=false)
     */
    private $fkCateg;


}
