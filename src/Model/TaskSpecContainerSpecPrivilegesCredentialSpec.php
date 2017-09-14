<?php

namespace DockerPhpClient\Model;

class TaskSpecContainerSpecPrivilegesCredentialSpec
{
    /**
     * @var string
     */
    protected $file;
    /**
     * @var string
     */
    protected $registry;
    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * @param string $file
     *
     * @return self
     */
    public function setFile($file = null)
    {
        $this->file = $file;
        return $this;
    }
    /**
     * @return string
     */
    public function getRegistry()
    {
        return $this->registry;
    }
    /**
     * @param string $registry
     *
     * @return self
     */
    public function setRegistry($registry = null)
    {
        $this->registry = $registry;
        return $this;
    }
}