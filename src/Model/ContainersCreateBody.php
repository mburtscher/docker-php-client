<?php

namespace DockerPhpClient\Model;

class ContainersCreateBody
{
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var string
     */
    protected $domainname;
    /**
     * @var string
     */
    protected $user;
    /**
     * @var bool
     */
    protected $attachStdin;
    /**
     * @var bool
     */
    protected $attachStdout;
    /**
     * @var bool
     */
    protected $attachStderr;
    /**
     * @var mixed[]
     */
    protected $exposedPorts;
    /**
     * @var bool
     */
    protected $tty;
    /**
     * @var bool
     */
    protected $openStdin;
    /**
     * @var bool
     */
    protected $stdinOnce;
    /**
     * @var string[]
     */
    protected $env;
    /**
     * @var string[]|string
     */
    protected $cmd;
    /**
     * @var HealthConfig
     */
    protected $healthcheck;
    /**
     * @var bool
     */
    protected $argsEscaped;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var ContainerConfigVolumes
     */
    protected $volumes;
    /**
     * @var string
     */
    protected $workingDir;
    /**
     * @var string[]|string
     */
    protected $entrypoint;
    /**
     * @var bool
     */
    protected $networkDisabled;
    /**
     * @var string
     */
    protected $macAddress;
    /**
     * @var string[]
     */
    protected $onBuild;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var string
     */
    protected $stopSignal;
    /**
     * @var int
     */
    protected $stopTimeout;
    /**
     * @var string[]
     */
    protected $shell;
    /**
     * @var object
     */
    protected $hostConfig;
    /**
     * @var ContainersCreateBodyNetworkingConfig
     */
    protected $networkingConfig;
    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname($hostname = null)
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainname()
    {
        return $this->domainname;
    }
    /**
     * @param string $domainname
     *
     * @return self
     */
    public function setDomainname($domainname = null)
    {
        $this->domainname = $domainname;
        return $this;
    }
    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser($user = null)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachStdin()
    {
        return $this->attachStdin;
    }
    /**
     * @param bool $attachStdin
     *
     * @return self
     */
    public function setAttachStdin($attachStdin = null)
    {
        $this->attachStdin = $attachStdin;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachStdout()
    {
        return $this->attachStdout;
    }
    /**
     * @param bool $attachStdout
     *
     * @return self
     */
    public function setAttachStdout($attachStdout = null)
    {
        $this->attachStdout = $attachStdout;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachStderr()
    {
        return $this->attachStderr;
    }
    /**
     * @param bool $attachStderr
     *
     * @return self
     */
    public function setAttachStderr($attachStderr = null)
    {
        $this->attachStderr = $attachStderr;
        return $this;
    }
    /**
     * @return mixed[]
     */
    public function getExposedPorts()
    {
        return $this->exposedPorts;
    }
    /**
     * @param mixed[] $exposedPorts
     *
     * @return self
     */
    public function setExposedPorts(\ArrayObject $exposedPorts = null)
    {
        $this->exposedPorts = $exposedPorts;
        return $this;
    }
    /**
     * @return bool
     */
    public function getTty()
    {
        return $this->tty;
    }
    /**
     * @param bool $tty
     *
     * @return self
     */
    public function setTty($tty = null)
    {
        $this->tty = $tty;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOpenStdin()
    {
        return $this->openStdin;
    }
    /**
     * @param bool $openStdin
     *
     * @return self
     */
    public function setOpenStdin($openStdin = null)
    {
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStdinOnce()
    {
        return $this->stdinOnce;
    }
    /**
     * @param bool $stdinOnce
     *
     * @return self
     */
    public function setStdinOnce($stdinOnce = null)
    {
        $this->stdinOnce = $stdinOnce;
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
     * @return string[]|string
     */
    public function getCmd()
    {
        return $this->cmd;
    }
    /**
     * @param string[]|string $cmd
     *
     * @return self
     */
    public function setCmd($cmd = null)
    {
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * @return HealthConfig
     */
    public function getHealthcheck()
    {
        return $this->healthcheck;
    }
    /**
     * @param HealthConfig $healthcheck
     *
     * @return self
     */
    public function setHealthcheck(HealthConfig $healthcheck = null)
    {
        $this->healthcheck = $healthcheck;
        return $this;
    }
    /**
     * @return bool
     */
    public function getArgsEscaped()
    {
        return $this->argsEscaped;
    }
    /**
     * @param bool $argsEscaped
     *
     * @return self
     */
    public function setArgsEscaped($argsEscaped = null)
    {
        $this->argsEscaped = $argsEscaped;
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
     * @return ContainerConfigVolumes
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /**
     * @param ContainerConfigVolumes $volumes
     *
     * @return self
     */
    public function setVolumes(ContainerConfigVolumes $volumes = null)
    {
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * @return string
     */
    public function getWorkingDir()
    {
        return $this->workingDir;
    }
    /**
     * @param string $workingDir
     *
     * @return self
     */
    public function setWorkingDir($workingDir = null)
    {
        $this->workingDir = $workingDir;
        return $this;
    }
    /**
     * @return string[]|string
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
    /**
     * @param string[]|string $entrypoint
     *
     * @return self
     */
    public function setEntrypoint($entrypoint = null)
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * @return bool
     */
    public function getNetworkDisabled()
    {
        return $this->networkDisabled;
    }
    /**
     * @param bool $networkDisabled
     *
     * @return self
     */
    public function setNetworkDisabled($networkDisabled = null)
    {
        $this->networkDisabled = $networkDisabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }
    /**
     * @param string $macAddress
     *
     * @return self
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getOnBuild()
    {
        return $this->onBuild;
    }
    /**
     * @param string[] $onBuild
     *
     * @return self
     */
    public function setOnBuild(array $onBuild = null)
    {
        $this->onBuild = $onBuild;
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
    public function getStopSignal()
    {
        return $this->stopSignal;
    }
    /**
     * @param string $stopSignal
     *
     * @return self
     */
    public function setStopSignal($stopSignal = null)
    {
        $this->stopSignal = $stopSignal;
        return $this;
    }
    /**
     * @return int
     */
    public function getStopTimeout()
    {
        return $this->stopTimeout;
    }
    /**
     * @param int $stopTimeout
     *
     * @return self
     */
    public function setStopTimeout($stopTimeout = null)
    {
        $this->stopTimeout = $stopTimeout;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getShell()
    {
        return $this->shell;
    }
    /**
     * @param string[] $shell
     *
     * @return self
     */
    public function setShell(array $shell = null)
    {
        $this->shell = $shell;
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
     * @return ContainersCreateBodyNetworkingConfig
     */
    public function getNetworkingConfig()
    {
        return $this->networkingConfig;
    }
    /**
     * @param ContainersCreateBodyNetworkingConfig $networkingConfig
     *
     * @return self
     */
    public function setNetworkingConfig(ContainersCreateBodyNetworkingConfig $networkingConfig = null)
    {
        $this->networkingConfig = $networkingConfig;
        return $this;
    }
}