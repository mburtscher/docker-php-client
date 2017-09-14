<?php

namespace DockerPhpClient\Model;

class PluginInterfaceType
{
    /**
     * @var string
     */
    protected $prefix;
    /**
     * @var string
     */
    protected $capability;
    /**
     * @var string
     */
    protected $version;
    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * @return string
     */
    public function getCapability()
    {
        return $this->capability;
    }
    /**
     * @param string $capability
     *
     * @return self
     */
    public function setCapability($capability = null)
    {
        $this->capability = $capability;
        return $this;
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version = null)
    {
        $this->version = $version;
        return $this;
    }
}