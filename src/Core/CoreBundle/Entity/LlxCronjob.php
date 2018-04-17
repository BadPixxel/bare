<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxCronjob
 *
 * @ORM\Table(name="llx_cronjob", indexes={@ORM\Index(name="idx_cronjob_status", columns={"status"}), @ORM\Index(name="idx_cronjob_datelastrun", columns={"datelastrun"}), @ORM\Index(name="idx_cronjob_datenextrun", columns={"datenextrun"}), @ORM\Index(name="idx_cronjob_datestart", columns={"datestart"}), @ORM\Index(name="idx_cronjob_dateend", columns={"dateend"})})
 * @ORM\Entity
 */
class LlxCronjob
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
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var string
     *
     * @ORM\Column(name="jobtype", type="string", length=10, nullable=false)
     */
    private $jobtype;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="command", type="string", length=255, nullable=true)
     */
    private $command;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classesname", type="string", length=255, nullable=true)
     */
    private $classesname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectname", type="string", length=255, nullable=true)
     */
    private $objectname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="methodename", type="string", length=255, nullable=true)
     */
    private $methodename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params", type="text", length=65535, nullable=true)
     */
    private $params;

    /**
     * @var string|null
     *
     * @ORM\Column(name="md5params", type="string", length=32, nullable=true)
     */
    private $md5params;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastrun", type="datetime", nullable=true)
     */
    private $datelastrun;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenextrun", type="datetime", nullable=true)
     */
    private $datenextrun;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datestart", type="datetime", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateend", type="datetime", nullable=true)
     */
    private $dateend;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastresult", type="datetime", nullable=true)
     */
    private $datelastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastresult", type="text", length=65535, nullable=true)
     */
    private $lastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastoutput", type="text", length=65535, nullable=true)
     */
    private $lastoutput;

    /**
     * @var string
     *
     * @ORM\Column(name="unitfrequency", type="string", length=255, nullable=false, options={"default"="3600"})
     */
    private $unitfrequency = '3600';

    /**
     * @var int
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false)
     */
    private $frequency = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxrun", type="integer", nullable=false)
     */
    private $maxrun = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrun", type="integer", nullable=true)
     */
    private $nbrun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="autodelete", type="integer", nullable=true)
     */
    private $autodelete = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="processing", type="integer", nullable=false)
     */
    private $processing = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="test", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $test = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=true)
     */
    private $fkUserMod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mailing", type="integer", nullable=true)
     */
    private $fkMailing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libname", type="string", length=255, nullable=true)
     */
    private $libname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true)
     */
    private $entity = '0';


}
