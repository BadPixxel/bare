<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxActioncomm
 *
 * @ORM\Table(name="llx_actioncomm", indexes={@ORM\Index(name="idx_actioncomm_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_actioncomm_fk_contact", columns={"fk_contact"}), @ORM\Index(name="idx_actioncomm_code", columns={"code"}), @ORM\Index(name="idx_actioncomm_fk_element", columns={"fk_element"}), @ORM\Index(name="idx_actioncomm_fk_user_action", columns={"fk_user_action"}), @ORM\Index(name="idx_actioncomm_fk_project", columns={"fk_project"}), @ORM\Index(name="idx_actioncomm_datep", columns={"datep"}), @ORM\Index(name="idx_actioncomm_datep2", columns={"datep2"}), @ORM\Index(name="idx_actioncomm_recurid", columns={"recurid"}), @ORM\Index(name="idx_actioncomm_ref_ext", columns={"ref_ext"})})
 * @ORM\Entity
 */
class LlxActioncomm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep", type="datetime", nullable=true)
     */
    private $datep;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep2", type="datetime", nullable=true)
     */
    private $datep2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_action", type="integer", nullable=true)
     */
    private $fkAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

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
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=true)
     */
    private $fkContact;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=false)
     */
    private $fkParent = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_action", type="integer", nullable=true)
     */
    private $fkUserAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_done", type="integer", nullable=true)
     */
    private $fkUserDone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transparency", type="integer", nullable=true)
     */
    private $transparency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="smallint", nullable=true)
     */
    private $priority;

    /**
     * @var int
     *
     * @ORM\Column(name="fulldayevent", type="smallint", nullable=false)
     */
    private $fulldayevent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="punctual", type="smallint", nullable=false, options={"default"="1"})
     */
    private $punctual = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="percent", type="smallint", nullable=false)
     */
    private $percent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=true)
     */
    private $location;

    /**
     * @var float|null
     *
     * @ORM\Column(name="durationp", type="float", precision=10, scale=0, nullable=true)
     */
    private $durationp;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_subject", type="string", length=255, nullable=true)
     */
    private $emailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_msgid", type="string", length=255, nullable=true)
     */
    private $emailMsgid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", length=255, nullable=true)
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_sender", type="string", length=255, nullable=true)
     */
    private $emailSender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_to", type="string", length=255, nullable=true)
     */
    private $emailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_tocc", type="string", length=255, nullable=true)
     */
    private $emailTocc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_tobcc", type="string", length=255, nullable=true)
     */
    private $emailTobcc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="errors_to", type="string", length=255, nullable=true)
     */
    private $errorsTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recurid", type="string", length=128, nullable=true)
     */
    private $recurid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recurrule", type="string", length=128, nullable=true)
     */
    private $recurrule;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="recurdateend", type="datetime", nullable=true)
     */
    private $recurdateend;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_element", type="integer", nullable=true)
     */
    private $fkElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elementtype", type="string", length=255, nullable=true)
     */
    private $elementtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;


}
