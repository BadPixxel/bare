<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCFormatCards
 *
 * @ORM\Table(name="llx_c_format_cards")
 * @ORM\Entity
 */
class LlxCFormatCards
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
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="paper_size", type="string", length=20, nullable=false)
     */
    private $paperSize;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=1, nullable=false)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="metric", type="string", length=5, nullable=false)
     */
    private $metric;

    /**
     * @var float
     *
     * @ORM\Column(name="leftmargin", type="float", precision=24, scale=8, nullable=false)
     */
    private $leftmargin;

    /**
     * @var float
     *
     * @ORM\Column(name="topmargin", type="float", precision=24, scale=8, nullable=false)
     */
    private $topmargin;

    /**
     * @var int
     *
     * @ORM\Column(name="nx", type="integer", nullable=false)
     */
    private $nx;

    /**
     * @var int
     *
     * @ORM\Column(name="ny", type="integer", nullable=false)
     */
    private $ny;

    /**
     * @var float
     *
     * @ORM\Column(name="spacex", type="float", precision=24, scale=8, nullable=false)
     */
    private $spacex;

    /**
     * @var float
     *
     * @ORM\Column(name="spacey", type="float", precision=24, scale=8, nullable=false)
     */
    private $spacey;

    /**
     * @var float
     *
     * @ORM\Column(name="width", type="float", precision=24, scale=8, nullable=false)
     */
    private $width;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float", precision=24, scale=8, nullable=false)
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="font_size", type="integer", nullable=false)
     */
    private $fontSize;

    /**
     * @var float
     *
     * @ORM\Column(name="custom_x", type="float", precision=24, scale=8, nullable=false)
     */
    private $customX;

    /**
     * @var float
     *
     * @ORM\Column(name="custom_y", type="float", precision=24, scale=8, nullable=false)
     */
    private $customY;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;


}
