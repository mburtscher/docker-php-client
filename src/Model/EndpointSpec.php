<?php

namespace DockerPhpClient\Model;

class EndpointSpec
{
    /**
     * @var string
     */
    protected $mode;
    /**
     * @var EndpointPortConfig[]
     */
    protected $ports;
    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * @param string $mode
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * @return EndpointPortConfig[]
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * @param EndpointPortConfig[] $ports
     *
     * @return self
     */
    public function setPorts(array $ports = null)
    {
        $this->ports = $ports;
        return $this;
    }
}