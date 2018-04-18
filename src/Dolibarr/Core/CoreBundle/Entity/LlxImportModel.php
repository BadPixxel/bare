<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxImportModel
 *
 * @ORM\Table(name="llx_import_model", uniqueConstraints={@ORM\UniqueConstraint(name="uk_import_model", columns={"label", "type"})})
 * @ORM\Entity
 */
class LlxImportModel
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
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="text", length=65535, nullable=false)
     */
    private $field;


}
