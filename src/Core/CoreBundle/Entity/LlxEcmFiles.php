<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEcmFiles
 *
 * @ORM\Table(name="llx_ecm_files", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ecm_files", columns={"filepath", "filename"})}, indexes={@ORM\Index(name="idx_ecm_files_label", columns={"label"})})
 * @ORM\Entity
 */
class LlxEcmFiles
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
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="share", type="string", length=128, nullable=true)
     */
    private $share;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="src_object_type", type="string", length=32, nullable=true)
     */
    private $srcObjectType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="src_object_id", type="integer", nullable=true)
     */
    private $srcObjectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullpath_orig", type="string", length=750, nullable=true)
     */
    private $fullpathOrig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=750, nullable=true)
     */
    private $keywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover", type="text", length=65535, nullable=true)
     */
    private $cover;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gen_or_uploaded", type="string", length=12, nullable=true)
     */
    private $genOrUploaded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_c", type="datetime", nullable=true)
     */
    private $dateC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_m", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateM = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_c", type="integer", nullable=true)
     */
    private $fkUserC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_m", type="integer", nullable=true)
     */
    private $fkUserM;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acl", type="text", length=65535, nullable=true)
     */
    private $acl;


}
