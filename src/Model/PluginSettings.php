<?php

namespace DockerPhpClient\Model;

class PluginSettings
{
    /**
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * @var string[]
     */
    protected $env;
    /**
     * @var string[]
     */
    protected $args;
    /**
     * @var PluginDevice[]
     */
    protected $devices;
    /**
     * @return PluginMount[]
     */
    public function getMounts()
    {
        return $this->mounts;
    }
    /**
     * @param PluginMount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts = null)
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getEnv()
    {
        return $this->env;
    }
    /**
     * @param string[] $env
     *
     * @return self
     */
    public function setEnv(array $env = null)
    {
        $this->env = $env;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getArgs()
    {
        return $this->args;
    }
    /**
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(array $args = null)
    {
        $this->args = $args;
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