<?php

namespace DockerPhpClient\Model;

class ServiceSpecMode
{
    /**
     * @var ServiceSpecModeReplicated
     */
    protected $replicated;
    /**
     * @var mixed
     */
    protected $global;
    /**
     * @return ServiceSpecModeReplicated
     */
    public function getReplicated()
    {
        return $this->replicated;
    }
    /**
     * @param ServiceSpecModeReplicated $replicated
     *
     * @return self
     */
    public function setReplicated(ServiceSpecModeReplicated $replicated = null)
    {
        $this->replicated = $replicated;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * @param mixed $global
     *
     * @return self
     */
    public function setGlobal($global = null)
    {
        $this->global = $global;
        return $this;
    }
}