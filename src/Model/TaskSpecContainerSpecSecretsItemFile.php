<?php

namespace DockerPhpClient\Model;

class TaskSpecContainerSpecSecretsItemFile
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $uID;
    /**
     * @var string
     */
    protected $gID;
    /**
     * @var int
     */
    protected $mode;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getUID()
    {
        return $this->uID;
    }
    /**
     * @param string $uID
     *
     * @return self
     */
    public function setUID($uID = null)
    {
        $this->uID = $uID;
        return $this;
    }
    /**
     * @return string
     */
    public function getGID()
    {
        return $this->gID;
    }
    /**
     * @param string $gID
     *
     * @return self
     */
    public function setGID($gID = null)
    {
        $this->gID = $gID;
        return $this;
    }
    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * @param int $mode
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        $this->mode = $mode;
        return $this;
    }
}