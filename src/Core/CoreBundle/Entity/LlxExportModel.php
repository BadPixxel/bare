<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxExportModel
 *
 * @ORM\Table(name="llx_export_model", uniqueConstraints={@ORM\UniqueConstraint(name="uk_export_model", columns={"label", "type"})})
 * @ORM\Entity
 */
class LlxExportModel
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="text", length=65535, nullable=false)
     */
    private $field;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filter", type="text", length=65535, nullable=true)
     */
    private $filter;


}
