<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxPrelevementRejet
 *
 * @ORM\Table(name="llx_prelevement_rejet")
 * @ORM\Entity
 */
class LlxPrelevementRejet
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
     * @ORM\Column(name="fk_prelevement_lignes", type="integer", nullable=true)
     */
    private $fkPrelevementLignes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rejet", type="datetime", nullable=true)
     */
    private $dateRejet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="motif", type="integer", nullable=true)
     */
    private $motif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creation", type="integer", nullable=true)
     */
    private $fkUserCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="afacturer", type="boolean", nullable=true)
     */
    private $afacturer = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture;


}
