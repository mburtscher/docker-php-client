<?php

namespace DockerPhpClient\Model;

class Network
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $scope;
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var bool
     */
    protected $enableIPv6;
    /**
     * @var IPAM
     */
    protected $iPAM;
    /**
     * @var bool
     */
    protected $internal;
    /**
     * @var bool
     */
    protected $attachable;
    /**
     * @var bool
     */
    protected $ingress;
    /**
     * @var NetworkContainer[]
     */
    protected $containers;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string[]
     */
    protected $labels;
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
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;
        return $this;
    }
    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }
    /**
     * @param string $scope
     *
     * @return self
     */
    public function setScope($scope = null)
    {
        $this->scope = $scope;
        return $this;
    }
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
     * @return bool
     */
    public function getEnableIPv6()
    {
        return $this->enableIPv6;
    }
    /**
     * @param bool $enableIPv6
     *
     * @return self
     */
    public function setEnableIPv6($enableIPv6 = null)
    {
        $this->enableIPv6 = $enableIPv6;
        return $this;
    }
    /**
     * @return IPAM
     */
    public function getIPAM()
    {
        return $this->iPAM;
    }
    /**
     * @param IPAM $iPAM
     *
     * @return self
     */
    public function setIPAM(IPAM $iPAM = null)
    {
        $this->iPAM = $iPAM;
        return $this;
    }
    /**
     * @return bool
     */
    public function getInternal()
    {
        return $this->internal;
    }
    /**
     * @param bool $internal
     *
     * @return self
     */
    public function setInternal($internal = null)
    {
        $this->internal = $internal;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachable()
    {
        return $this->attachable;
    }
    /**
     * @param bool $attachable
     *
     * @return self
     */
    public function setAttachable($attachable = null)
    {
        $this->attachable = $attachable;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIngress()
    {
        return $this->ingress;
    }
    /**
     * @param bool $ingress
     *
     * @return self
     */
    public function setIngress($ingress = null)
    {
        $this->ingress = $ingress;
        return $this;
    }
    /**
     * @return NetworkContainer[]
     */
    public function getContainers()
    {
        return $this->containers;
    }
    /**
     * @param NetworkContainer[] $containers
     *
     * @return self
     */
    public function setContainers(\ArrayObject $containers = null)
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(\ArrayObject $options = null)
    {
        $this->options = $options;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(\ArrayObject $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}