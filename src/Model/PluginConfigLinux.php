<?php

namespace DockerPhpClient\Model;

class PluginConfigLinux
{
    /**
     * @var string[]
     */
    protected $capabilities;
    /**
     * @var bool
     */
    protected $allowAllDevices;
    /**
     * @var PluginDevice[]
     */
    protected $devices;
    /**
     * @return string[]
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }
    /**
     * @param string[] $capabilities
     *
     * @return self
     */
    public function setCapabilities(array $capabilities = null)
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAllowAllDevices()
    {
        return $this->allowAllDevices;
    }
    /**
     * @param bool $allowAllDevices
     *
     * @return self
     */
    public function setAllowAllDevices($allowAllDevices = null)
    {
        $this->allowAllDevices = $allowAllDevices;
        return $this;
    }
    /**
     * @return PluginDevice[]
     */
    public function getDevices()
    {
        return $this->devices;
    }
    /**
     * @param PluginDevice[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices = null)
    {
        $this->devices = $devices;
        return $this;
    }
}