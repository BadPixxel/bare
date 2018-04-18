<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCategorieLang
 *
 * @ORM\Table(name="llx_categorie_lang", uniqueConstraints={@ORM\UniqueConstraint(name="uk_category_lang", columns={"fk_category", "lang"})}, indexes={@ORM\Index(name="IDX_9B2B304334645A1F", columns={"fk_category"})})
 * @ORM\Entity
 */
class LlxCategorieLang
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
     * @ORM\Column(name="lang", type="string", length=5, nullable=false)
     */
    private $lang = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \Dolibarr\Core\CoreBundle\Entity\LlxCategorie
     *
     * @ORM\ManyToOne(targetEntity="Dolibarr\Core\CoreBundle\Entity\LlxCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_category", referencedColumnName="rowid")
     * })
     */
    private $fkCategory;


}
