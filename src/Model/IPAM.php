<?php

namespace DockerPhpClient\Model;

class IPAM
{
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var string[][]
     */
    protected $config;
    /**
     * @var string[][]
     */
    protected $options;
    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }
    /**
     * @param string $driver
     *
     * @return self
     */
    public function setDriver($driver = null)
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * @return string[][]
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param string[][] $config
     *
     * @return self
     */
    public function setConfig(array $config = null)
    {
        $this->config = $config;
        return $this;
    }
    /**
     * @return string[][]
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * @param string[][] $options
     *
     * @return self
     */
    public function setOptions(array $options = null)
    {
        $this->options = $options;
        return $this;
    }
}