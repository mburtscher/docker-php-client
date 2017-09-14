<?php

namespace DockerPhpClient\Model;

class PluginConfigUser
{
    /**
     * @var int
     */
    protected $uID;
    /**
     * @var int
     */
    protected $gID;
    /**
     * @return int
     */
    public function getUID()
    {
        return $this->uID;
    }
    /**
     * @param int $uID
     *
     * @return self
     */
    public function setUID($uID = null)
    {
        $this->uID = $uID;
        return $this;
    }
    /**
     * @return int
     */
    public function getGID()
    {
        return $this->gID;
    }
    /**
     * @param int $gID
     *
     * @return self
     */
    public function setGID($gID = null)
    {
        $this->gID = $gID;
        return $this;
    }
}