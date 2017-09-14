<?php

namespace DockerPhpClient\Model;

class AuthConfig
{
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $serveraddress;
    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername($username = null)
    {
        $this->username = $username;
        return $this;
    }
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * @return string
     */
    public function getServeraddress()
    {
        return $this->serveraddress;
    }
    /**
     * @param string $serveraddress
     *
     * @return self
     */
    public function setServeraddress($serveraddress = null)
    {
        $this->serveraddress = $serveraddress;
        return $this;
    }
}