<?php

namespace DockerPhpClient\Model;

class ContainersIdJsonResponse200
{
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
    protected $path;
    /**
     * @var string[]
     */
    protected $args;
    /**
     * @var ContainersIdJsonResponse200State
     */
    protected $state;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string
     */
    protected $resolvConfPath;
    /**
     * @var string
     */
    protected $hostnamePath;
    /**
     * @var string
     */
    protected $hostsPath;
    /**
     * @var string
     */
    protected $logPath;
    /**
     * @var mixed
     */
    protected $node;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $restartCount;
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var string
     */
    protected $mountLabel;
    /**
     * @var string
     */
    protected $processLabel;
    /**
     * @var string
     */
    protected $appArmorProfile;
    /**
     * @var string
     */
    protected $execIDs;
    /**
     * @var object
     */
    protected $hostConfig;
    /**
     * @var GraphDriverData
     */
    protected $graphDriver;
    /**
     * @var int
     */
    protected $sizeRw;
    /**
     * @var int
     */
    protected $sizeRootFs;
    /**
     * @var MountPoint[]
     */
    protected $mounts;
    /**
     * @var ContainerConfig
     */
    protected $config;
    /**
     * @var NetworkConfig
     */
    protected $networkSettings;
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
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;
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
     * @return ContainersIdJsonResponse200State
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @param ContainersIdJsonResponse200State $state
     *
     * @return self
     */
    public function setState(ContainersIdJsonResponse200State $state = null)
    {
        $this->state = $state;
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
    public function getResolvConfPath()
    {
        return $this->resolvConfPath;
    }
    /**
     * @param string $resolvConfPath
     *
     * @return self
     */
    public function setResolvConfPath($resolvConfPath = null)
    {
        $this->resolvConfPath = $resolvConfPath;
        return $this;
    }
    /**
     * @return string
     */
    public function getHostnamePath()
    {
        return $this->hostnamePath;
    }
    /**
     * @param string $hostnamePath
     *
     * @return self
     */
    public function setHostnamePath($hostnamePath = null)
    {
        $this->hostnamePath = $hostnamePath;
        return $this;
    }
    /**
     * @return string
     */
    public function getHostsPath()
    {
        return $this->hostsPath;
    }
    /**
     * @param string $hostsPath
     *
     * @return self
     */
    public function setHostsPath($hostsPath = null)
    {
        $this->hostsPath = $hostsPath;
        return $this;
    }
    /**
     * @return string
     */
    public function getLogPath()
    {
        return $this->logPath;
    }
    /**
     * @param string $logPath
     *
     * @return self
     */
    public function setLogPath($logPath = null)
    {
        $this->logPath = $logPath;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * @param mixed $node
     *
     * @return self
     */
    public function setNode($node = null)
    {
        $this->node = $node;
        return $this;
    }
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
     * @return int
     */
    public function getRestartCount()
    {
        return $this->restartCount;
    }
    /**
     * @param int $restartCount
     *
     * @return self
     */
    public function setRestartCount($restartCount = null)
    {
        $this->restartCount = $restartCount;
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
    public function getMountLabel()
    {
        return $this->mountLabel;
    }
    /**
     * @param string $mountLabel
     *
     * @return self
     */
    public function setMountLabel($mountLabel = null)
    {
        $this->mountLabel = $mountLabel;
        return $this;
    }
    /**
     * @return string
     */
    public function getProcessLabel()
    {
        return $this->processLabel;
    }
    /**
     * @param string $processLabel
     *
     * @return self
     */
    public function setProcessLabel($processLabel = null)
    {
        $this->processLabel = $processLabel;
        return $this;
    }
    /**
     * @return string
     */
    public function getAppArmorProfile()
    {
        return $this->appArmorProfile;
    }
    /**
     * @param string $appArmorProfile
     *
     * @return self
     */
    public function setAppArmorProfile($appArmorProfile = null)
    {
        $this->appArmorProfile = $appArmorProfile;
        return $this;
    }
    /**
     * @return string
     */
    public function getExecIDs()
    {
        return $this->execIDs;
    }
    /**
     * @param string $execIDs
     *
     * @return self
     */
    public function setExecIDs($execIDs = null)
    {
        $this->execIDs = $execIDs;
        return $this;
    }
    /**
     * @return object
     */
    public function getHostConfig()
    {
        return $this->hostConfig;
    }
    /**
     * @param object $hostConfig
     *
     * @return self
     */
    public function setHostConfig($hostConfig = null)
    {
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * @return GraphDriverData
     */
    public function getGraphDriver()
    {
        return $this->graphDriver;
    }
    /**
     * @param GraphDriverData $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(GraphDriverData $graphDriver = null)
    {
        $this->graphDriver = $graphDriver;
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
     * @return MountPoint[]
     */
    public function getMounts()
    {
        return $this->mounts;
    }
    /**
     * @param MountPoint[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts = null)
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * @return ContainerConfig
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param ContainerConfig $config
     *
     * @return self
     */
    public function setConfig(ContainerConfig $config = null)
    {
        $this->config = $config;
        return $this;
    }
    /**
     * @return NetworkConfig
     */
    public function getNetworkSettings()
    {
        return $this->networkSettings;
    }
    /**
     * @param NetworkConfig $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(NetworkConfig $networkSettings = null)
    {
        $this->networkSettings = $networkSettings;
        return $this;
    }
}