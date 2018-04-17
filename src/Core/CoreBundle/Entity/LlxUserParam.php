<?php

namespace Dolibarr\Core\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxUserParam
 *
 * @ORM\Table(name="llx_user_param", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_param", columns={"fk_user", "param", "entity"})})
 * @ORM\Entity
 */
class LlxUserParam
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=180, nullable=false)
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;


}
