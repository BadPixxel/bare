<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCTypeContact
 *
 * @ORM\Table(name="llx_c_type_contact", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_type_contact_id", columns={"element", "source", "code"})})
 * @ORM\Entity
 */
class LlxCTypeContact
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
     * @ORM\Column(name="element", type="string", length=30, nullable=false)
     */
    private $element;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=8, nullable=false, options={"default"="external"})
     */
    private $source = 'external';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=64, nullable=false)
     */
    private $libelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

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
