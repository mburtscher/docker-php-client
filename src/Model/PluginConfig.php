<?php

namespace DockerPhpClient\Model;

class PluginConfig
{
    /**
     * @var string
     */
    protected $dockerVersion;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $documentation;
    /**
     * @var PluginConfigInterface
     */
    protected $interface;
    /**
     * @var string[]
     */
    protected $entrypoint;
    /**
     * @var string
     */
    protected $workDir;
    /**
     * @var PluginConfigUser
     */
    protected $user;
    /**
     * @var PluginConfigNetwork
     */
    protected $network;
    /**
     * @var PluginConfigLinux
     */
    protected $linux;
    /**
     * @var string
     */
    protected $propagatedMount;
    /**
     * @var bool
     */
    protected $ipcHost;
    /**
     * @var bool
     */
    protected $pidHost;
    /**
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * @var PluginEnv[]
     */
    protected $env;
    /**
     * @var PluginConfigArgs
     */
    protected $args;
    /**
     * @var PluginConfigRootfs
     */
    protected $rootfs;
    /**
     * @return string
     */
    public function getDockerVersion()
    {
        return $this->dockerVersion;
    }
    /**
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion($dockerVersion = null)
    {
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }
    /**
     * @param string $documentation
     *
     * @return self
     */
    public function setDocumentation($documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }
    /**
     * @return PluginConfigInterface
     */
    public function getInterface()
    {
        return $this->interface;
    }
    /**
     * @param PluginConfigInterface $interface
     *
     * @return self
     */
    public function setInterface(PluginConfigInterface $interface = null)
    {
        $this->interface = $interface;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
    /**
     * @param string[] $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(array $entrypoint = null)
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getWorkDir()
    {
        return $this->workDir;
    }
    /**
     * @param string $workDir
     *
     * @return self
     */
    public function setWorkDir($workDir = null)
    {
        $this->workDir = $workDir;
        return $this;
    }
    /**
     * @return PluginConfigUser
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param PluginConfigUser $user
     *
     * @return self
     */
    public function setUser(PluginConfigUser $user = null)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * @return PluginConfigNetwork
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * @param PluginConfigNetwork $network
     *
     * @return self
     */
    public function setNetwork(PluginConfigNetwork $network = null)
    {
        $this->network = $network;
        return $this;
    }
    /**
     * @return PluginConfigLinux
     */
    public function getLinux()
    {
        return $this->linux;
    }
    /**
     * @param PluginConfigLinux $linux
     *
     * @return self
     */
    public function setLinux(PluginConfigLinux $linux = null)
    {
        $this->linux = $linux;
        return $this;
    }
    /**
     * @return string
     */
    public function getPropagatedMount()
    {
        return $this->propagatedMount;
    }
    /**
     * @param string $propagatedMount
     *
     * @return self
     */
    public function setPropagatedMount($propagatedMount = null)
    {
        $this->propagatedMount = $propagatedMount;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIpcHost()
    {
        return $this->ipcHost;
    }
    /**
     * @param bool $ipcHost
     *
     * @return self
     */
    public function setIpcHost($ipcHost = null)
    {
        $this->ipcHost = $ipcHost;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPidHost()
    {
        return $this->pidHost;
    }
    /**
     * @param bool $pidHost
     *
     * @return self
     */
    public function setPidHost($pidHost = null)
    {
        $this->pidHost = $pidHost;
        return $this;
    }
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
     * @return PluginEnv[]
     */
    public function getEnv()
    {
        return $this->env;
    }
    /**
     * @param PluginEnv[] $env
     *
     * @return self
     */
    public function setEnv(array $env = null)
    {
        $this->env = $env;
        return $this;
    }
    /**
     * @return PluginConfigArgs
     */
    public function getArgs()
    {
        return $this->args;
    }
    /**
     * @param PluginConfigArgs $args
     *
     * @return self
     */
    public function setArgs(PluginConfigArgs $args = null)
    {
        $this->args = $args;
        return $this;
    }
    /**
     * @return PluginConfigRootfs
     */
    public function getRootfs()
    {
        return $this->rootfs;
    }
    /**
     * @param PluginConfigRootfs $rootfs
     *
     * @return self
     */
    public function setRootfs(PluginConfigRootfs $rootfs = null)
    {
        $this->rootfs = $rootfs;
        return $this;
    }
}