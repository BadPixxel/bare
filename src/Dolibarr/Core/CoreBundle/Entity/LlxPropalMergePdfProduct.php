<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPropalMergePdfProduct
 *
 * @ORM\Table(name="llx_propal_merge_pdf_product")
 * @ORM\Entity
 */
class LlxPropalMergePdfProduct
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
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=200, nullable=false)
     */
    private $fileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=false)
     */
    private $fkUserMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;


}
