<?php

namespace DockerPhpClient\Model;

class SwarmSpecTaskDefaults
{
    /**
     * @var SwarmSpecTaskDefaultsLogDriver
     */
    protected $logDriver;
    /**
     * @return SwarmSpecTaskDefaultsLogDriver
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }
    /**
     * @param SwarmSpecTaskDefaultsLogDriver $logDriver
     *
     * @return self
     */
    public function setLogDriver(SwarmSpecTaskDefaultsLogDriver $logDriver = null)
    {
        $this->logDriver = $logDriver;
        return $this;
    }
}