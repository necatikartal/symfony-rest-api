<?php

namespace Test\RestApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $userpasswod;


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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userpasswod
     *
     * @param string $userpasswod
     * @return User
     */
    public function setUserpasswod($userpasswod)
    {
        $this->userpasswod = $userpasswod;

        return $this;
    }

    /**
     * Get userpasswod
     *
     * @return string 
     */
    public function getUserpasswod()
    {
        return $this->userpasswod;
    }
}
