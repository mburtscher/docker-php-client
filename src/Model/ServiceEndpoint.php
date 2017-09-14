<?php

namespace DockerPhpClient\Model;

class ServiceEndpoint
{
    /**
     * @var EndpointSpec
     */
    protected $spec;
    /**
     * @var EndpointPortConfig[]
     */
    protected $ports;
    /**
     * @var ServiceEndpointVirtualIPsItem[]
     */
    protected $virtualIPs;
    /**
     * @return EndpointSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
    /**
     * @param EndpointSpec $spec
     *
     * @return self
     */
    public function setSpec(EndpointSpec $spec = null)
    {
        $this->spec = $spec;
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
    /**
     * @return ServiceEndpointVirtualIPsItem[]
     */
    public function getVirtualIPs()
    {
        return $this->virtualIPs;
    }
    /**
     * @param ServiceEndpointVirtualIPsItem[] $virtualIPs
     *
     * @return self
     */
    public function setVirtualIPs(array $virtualIPs = null)
    {
        $this->virtualIPs = $virtualIPs;
        return $this;
    }
}