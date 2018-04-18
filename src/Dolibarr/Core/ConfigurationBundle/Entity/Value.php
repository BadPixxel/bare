<?php

namespace Dolibarr\Core\ConfigurationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @abstract    Configuration Value Class
 *
 * @ORM\Table(name="llx_const", uniqueConstraints={@ORM\UniqueConstraint(name="uk_const", columns={"name", "entity"})})
 * 
 * @ORM\Entity
 */
class Value
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
     * @ORM\Column(name="name", type="string", length=180, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=6, nullable=true)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $visible = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';



    /**
     * Get rowid.
     *
     * @return int
     */
    public function getRowid()
    {
        return $this->rowid;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Value
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set entity.
     *
     * @param int $entity
     *
     * @return Value
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity.
     *
     * @return int
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return Value
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set type.
     *
     * @param string|null $type
     *
     * @return Value
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return Value
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set note.
     *
     * @param string|null $note
     *
     * @return Value
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set tms.
     *
     * @param \DateTime $tms
     *
     * @return Value
     */
    public function setTms($tms)
    {
        $this->tms = $tms;

        return $this;
    }

    /**
     * Get tms.
     *
     * @return \DateTime
     */
    public function getTms()
    {
        return $this->tms;
    }
}
