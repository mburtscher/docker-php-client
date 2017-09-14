<?php

namespace DockerPhpClient\Model;

class Port
{
    /**
     * @var string
     */
    protected $iP;
    /**
     * @var int
     */
    protected $privatePort;
    /**
     * @var int
     */
    protected $publicPort;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return string
     */
    public function getIP()
    {
        return $this->iP;
    }
    /**
     * @param string $iP
     *
     * @return self
     */
    public function setIP($iP = null)
    {
        $this->iP = $iP;
        return $this;
    }
    /**
     * @return int
     */
    public function getPrivatePort()
    {
        return $this->privatePort;
    }
    /**
     * @param int $privatePort
     *
     * @return self
     */
    public function setPrivatePort($privatePort = null)
    {
        $this->privatePort = $privatePort;
        return $this;
    }
    /**
     * @return int
     */
    public function getPublicPort()
    {
        return $this->publicPort;
    }
    /**
     * @param int $publicPort
     *
     * @return self
     */
    public function setPublicPort($publicPort = null)
    {
        $this->publicPort = $publicPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
}