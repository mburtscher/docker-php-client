<?php

namespace DockerPhpClient\Model;

class Volume
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var string
     */
    protected $mountpoint;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var mixed[]
     */
    protected $status;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var string
     */
    protected $scope;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var VolumeUsageData
     */
    protected $usageData;
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
     * @return string
     */
    public function getMountpoint()
    {
        return $this->mountpoint;
    }
    /**
     * @param string $mountpoint
     *
     * @return self
     */
    public function setMountpoint($mountpoint = null)
    {
        $this->mountpoint = $mountpoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return mixed[]
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param mixed[] $status
     *
     * @return self
     */
    public function setStatus(\ArrayObject $status = null)
    {
        $this->status = $status;
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
     * @return VolumeUsageData
     */
    public function getUsageData()
    {
        return $this->usageData;
    }
    /**
     * @param VolumeUsageData $usageData
     *
     * @return self
     */
    public function setUsageData(VolumeUsageData $usageData = null)
    {
        $this->usageData = $usageData;
        return $this;
    }
}