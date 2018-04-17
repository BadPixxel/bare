<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCBarcodeType
 *
 * @ORM\Table(name="llx_c_barcode_type", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_barcode_type", columns={"code", "entity"})})
 * @ORM\Entity
 */
class LlxCBarcodeType
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
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="coder", type="string", length=16, nullable=false)
     */
    private $coder;

    /**
     * @var string
     *
     * @ORM\Column(name="example", type="string", length=16, nullable=false)
     */
    private $example;


}
