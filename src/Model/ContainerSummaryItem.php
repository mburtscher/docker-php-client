<?php

namespace DockerPhpClient\Model;

class ContainerSummaryItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $names;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string
     */
    protected $imageID;
    /**
     * @var string
     */
    protected $command;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var Port[]
     */
    protected $ports;
    /**
     * @var int
     */
    protected $sizeRw;
    /**
     * @var int
     */
    protected $sizeRootFs;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var ContainerSummaryItemHostConfig
     */
    protected $hostConfig;
    /**
     * @var ContainerSummaryItemNetworkSettings
     */
    protected $networkSettings;
    /**
     * @var Mount[]
     */
    protected $mounts;
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
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * @param string[] $names
     *
     * @return self
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }
    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @param string $image
     *
     * @return self
     */
    public function setImage($image = null)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * @return string
     */
    public function getImageID()
    {
        return $this->imageID;
    }
    /**
     * @param string $imageID
     *
     * @return self
     */
    public function setImageID($imageID = null)
    {
        $this->imageID = $imageID;
        return $this;
    }
    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }
    /**
     * @param string $command
     *
     * @return self
     */
    public function setCommand($command = null)
    {
        $this->command = $command;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * @param int $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;
        return $this;
    }
    /**
     * @return Port[]
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * @param Port[] $ports
     *
     * @return self
     */
    public function setPorts(array $ports = null)
    {
        $this->ports = $ports;
        return $this;
    }
    /**
     * @return int
     */
    public function getSizeRw()
    {
        return $this->sizeRw;
    }
    /**
     * @param int $sizeRw
     *
     * @return self
     */
    public function setSizeRw($sizeRw = null)
    {
        $this->sizeRw = $sizeRw;
        return $this;
    }
    /**
     * @return int
     */
    public function getSizeRootFs()
    {
        return $this->sizeRootFs;
    }
    /**
     * @param int $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs($sizeRootFs = null)
    {
        $this->sizeRootFs = $sizeRootFs;
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
    public function getState()
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState($state = null)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * @return ContainerSummaryItemHostConfig
     */
    public function getHostConfig()
    {
        return $this->hostConfig;
    }
    /**
     * @param ContainerSummaryItemHostConfig $hostConfig
     *
     * @return self
     */
    public function setHostConfig(ContainerSummaryItemHostConfig $hostConfig = null)
    {
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * @return ContainerSummaryItemNetworkSettings
     */
    public function getNetworkSettings()
    {
        return $this->networkSettings;
    }
    /**
     * @param ContainerSummaryItemNetworkSettings $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(ContainerSummaryItemNetworkSettings $networkSettings = null)
    {
        $this->networkSettings = $networkSettings;
        return $this;
    }
    /**
     * @return Mount[]
     */
    public function getMounts()
    {
        return $this->mounts;
    }
    /**
     * @param Mount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts = null)
    {
        $this->mounts = $mounts;
        return $this;
    }
}