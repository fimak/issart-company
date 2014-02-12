<?php

namespace ISS\BlogBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package ISS\BlogBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

/*
    protected $username;
    protected $email;
    protected $password;
    protected $salt;
    protected $last_login;
    protected $role;
    protected $status;
    protected $created;
    protected $updated;
*/
}