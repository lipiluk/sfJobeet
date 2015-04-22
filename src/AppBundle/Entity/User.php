<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="veryfied", type="boolean", nullable=true)
     */
    private $veryfied;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set veryfied
     *
     * @param boolean $veryfied
     * @return User
     */
    public function setVeryfied($veryfied)
    {
        $this->veryfied = $veryfied;

        return $this;
    }

    /**
     * Get veryfied
     *
     * @return boolean
     */
    public function getVeryfied()
    {
        return $this->veryfied;
    }
}
