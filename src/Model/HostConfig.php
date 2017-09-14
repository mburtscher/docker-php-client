<?php

namespace DockerPhpClient\Model;

class HostConfig
{
    /**
     * @var int
     */
    protected $cpuShares;
    /**
     * @var int
     */
    protected $memory;
    /**
     * @var string
     */
    protected $cgroupParent;
    /**
     * @var int
     */
    protected $blkioWeight;
    /**
     * @var ResourcesBlkioWeightDeviceItem[]
     */
    protected $blkioWeightDevice;
    /**
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceReadBps;
    /**
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceWriteBps;
    /**
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceReadIOps;
    /**
     * @var ThrottleDevice[]
     */
    protected $blkioDeviceWriteIOps;
    /**
     * @var int
     */
    protected $cpuPeriod;
    /**
     * @var int
     */
    protected $cpuQuota;
    /**
     * @var int
     */
    protected $cpuRealtimePeriod;
    /**
     * @var int
     */
    protected $cpuRealtimeRuntime;
    /**
     * @var string
     */
    protected $cpusetCpus;
    /**
     * @var string
     */
    protected $cpusetMems;
    /**
     * @var DeviceMapping[]
     */
    protected $devices;
    /**
     * @var string[]
     */
    protected $deviceCgroupRules;
    /**
     * @var int
     */
    protected $diskQuota;
    /**
     * @var int
     */
    protected $kernelMemory;
    /**
     * @var int
     */
    protected $memoryReservation;
    /**
     * @var int
     */
    protected $memorySwap;
    /**
     * @var int
     */
    protected $memorySwappiness;
    /**
     * @var int
     */
    protected $nanoCPUs;
    /**
     * @var bool
     */
    protected $oomKillDisable;
    /**
     * @var int
     */
    protected $pidsLimit;
    /**
     * @var ResourcesUlimitsItem[]
     */
    protected $ulimits;
    /**
     * @var int
     */
    protected $cpuCount;
    /**
     * @var int
     */
    protected $cpuPercent;
    /**
     * @var int
     */
    protected $iOMaximumIOps;
    /**
     * @var int
     */
    protected $iOMaximumBandwidth;
    /**
     * @var string[]
     */
    protected $binds;
    /**
     * @var string
     */
    protected $containerIDFile;
    /**
     * @var HostConfigLogConfig
     */
    protected $logConfig;
    /**
     * @var string
     */
    protected $networkMode;
    /**
     * @var HostConfigPortBindingsItem[]
     */
    protected $portBindings;
    /**
     * @var RestartPolicy
     */
    protected $restartPolicy;
    /**
     * @var bool
     */
    protected $autoRemove;
    /**
     * @var string
     */
    protected $volumeDriver;
    /**
     * @var string[]
     */
    protected $volumesFrom;
    /**
     * @var Mount[]
     */
    protected $mounts;
    /**
     * @var string[]
     */
    protected $capAdd;
    /**
     * @var string[]
     */
    protected $capDrop;
    /**
     * @var string[]
     */
    protected $dns;
    /**
     * @var string[]
     */
    protected $dnsOptions;
    /**
     * @var string[]
     */
    protected $dnsSearch;
    /**
     * @var string[]
     */
    protected $extraHosts;
    /**
     * @var string[]
     */
    protected $groupAdd;
    /**
     * @var string
     */
    protected $ipcMode;
    /**
     * @var string
     */
    protected $cgroup;
    /**
     * @var string[]
     */
    protected $links;
    /**
     * @var int
     */
    protected $oomScoreAdj;
    /**
     * @var string
     */
    protected $pidMode;
    /**
     * @var bool
     */
    protected $privileged;
    /**
     * @var bool
     */
    protected $publishAllPorts;
    /**
     * @var bool
     */
    protected $readonlyRootfs;
    /**
     * @var string[]
     */
    protected $securityOpt;
    /**
     * @var string[]
     */
    protected $storageOpt;
    /**
     * @var string[]
     */
    protected $tmpfs;
    /**
     * @var string
     */
    protected $uTSMode;
    /**
     * @var string
     */
    protected $usernsMode;
    /**
     * @var int
     */
    protected $shmSize;
    /**
     * @var string[]
     */
    protected $sysctls;
    /**
     * @var string
     */
    protected $runtime;
    /**
     * @var int[]
     */
    protected $consoleSize;
    /**
     * @var string
     */
    protected $isolation;
    /**
     * @return int
     */
    public function getCpuShares()
    {
        return $this->cpuShares;
    }
    /**
     * @param int $cpuShares
     *
     * @return self
     */
    public function setCpuShares($cpuShares = null)
    {
        $this->cpuShares = $cpuShares;
        return $this;
    }
    /**
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }
    /**
     * @param int $memory
     *
     * @return self
     */
    public function setMemory($memory = null)
    {
        $this->memory = $memory;
        return $this;
    }
    /**
     * @return string
     */
    public function getCgroupParent()
    {
        return $this->cgroupParent;
    }
    /**
     * @param string $cgroupParent
     *
     * @return self
     */
    public function setCgroupParent($cgroupParent = null)
    {
        $this->cgroupParent = $cgroupParent;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlkioWeight()
    {
        return $this->blkioWeight;
    }
    /**
     * @param int $blkioWeight
     *
     * @return self
     */
    public function setBlkioWeight($blkioWeight = null)
    {
        $this->blkioWeight = $blkioWeight;
        return $this;
    }
    /**
     * @return ResourcesBlkioWeightDeviceItem[]
     */
    public function getBlkioWeightDevice()
    {
        return $this->blkioWeightDevice;
    }
    /**
     * @param ResourcesBlkioWeightDeviceItem[] $blkioWeightDevice
     *
     * @return self
     */
    public function setBlkioWeightDevice(array $blkioWeightDevice = null)
    {
        $this->blkioWeightDevice = $blkioWeightDevice;
        return $this;
    }
    /**
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceReadBps()
    {
        return $this->blkioDeviceReadBps;
    }
    /**
     * @param ThrottleDevice[] $blkioDeviceReadBps
     *
     * @return self
     */
    public function setBlkioDeviceReadBps(array $blkioDeviceReadBps = null)
    {
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;
        return $this;
    }
    /**
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceWriteBps()
    {
        return $this->blkioDeviceWriteBps;
    }
    /**
     * @param ThrottleDevice[] $blkioDeviceWriteBps
     *
     * @return self
     */
    public function setBlkioDeviceWriteBps(array $blkioDeviceWriteBps = null)
    {
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;
        return $this;
    }
    /**
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceReadIOps()
    {
        return $this->blkioDeviceReadIOps;
    }
    /**
     * @param ThrottleDevice[] $blkioDeviceReadIOps
     *
     * @return self
     */
    public function setBlkioDeviceReadIOps(array $blkioDeviceReadIOps = null)
    {
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;
        return $this;
    }
    /**
     * @return ThrottleDevice[]
     */
    public function getBlkioDeviceWriteIOps()
    {
        return $this->blkioDeviceWriteIOps;
    }
    /**
     * @param ThrottleDevice[] $blkioDeviceWriteIOps
     *
     * @return self
     */
    public function setBlkioDeviceWriteIOps(array $blkioDeviceWriteIOps = null)
    {
        $this->blkioDeviceWriteIOps = $blkioDeviceWriteIOps;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuPeriod()
    {
        return $this->cpuPeriod;
    }
    /**
     * @param int $cpuPeriod
     *
     * @return self
     */
    public function setCpuPeriod($cpuPeriod = null)
    {
        $this->cpuPeriod = $cpuPeriod;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuQuota()
    {
        return $this->cpuQuota;
    }
    /**
     * @param int $cpuQuota
     *
     * @return self
     */
    public function setCpuQuota($cpuQuota = null)
    {
        $this->cpuQuota = $cpuQuota;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuRealtimePeriod()
    {
        return $this->cpuRealtimePeriod;
    }
    /**
     * @param int $cpuRealtimePeriod
     *
     * @return self
     */
    public function setCpuRealtimePeriod($cpuRealtimePeriod = null)
    {
        $this->cpuRealtimePeriod = $cpuRealtimePeriod;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuRealtimeRuntime()
    {
        return $this->cpuRealtimeRuntime;
    }
    /**
     * @param int $cpuRealtimeRuntime
     *
     * @return self
     */
    public function setCpuRealtimeRuntime($cpuRealtimeRuntime = null)
    {
        $this->cpuRealtimeRuntime = $cpuRealtimeRuntime;
        return $this;
    }
    /**
     * @return string
     */
    public function getCpusetCpus()
    {
        return $this->cpusetCpus;
    }
    /**
     * @param string $cpusetCpus
     *
     * @return self
     */
    public function setCpusetCpus($cpusetCpus = null)
    {
        $this->cpusetCpus = $cpusetCpus;
        return $this;
    }
    /**
     * @return string
     */
    public function getCpusetMems()
    {
        return $this->cpusetMems;
    }
    /**
     * @param string $cpusetMems
     *
     * @return self
     */
    public function setCpusetMems($cpusetMems = null)
    {
        $this->cpusetMems = $cpusetMems;
        return $this;
    }
    /**
     * @return DeviceMapping[]
     */
    public function getDevices()
    {
        return $this->devices;
    }
    /**
     * @param DeviceMapping[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices = null)
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getDeviceCgroupRules()
    {
        return $this->deviceCgroupRules;
    }
    /**
     * @param string[] $deviceCgroupRules
     *
     * @return self
     */
    public function setDeviceCgroupRules(array $deviceCgroupRules = null)
    {
        $this->deviceCgroupRules = $deviceCgroupRules;
        return $this;
    }
    /**
     * @return int
     */
    public function getDiskQuota()
    {
        return $this->diskQuota;
    }
    /**
     * @param int $diskQuota
     *
     * @return self
     */
    public function setDiskQuota($diskQuota = null)
    {
        $this->diskQuota = $diskQuota;
        return $this;
    }
    /**
     * @return int
     */
    public function getKernelMemory()
    {
        return $this->kernelMemory;
    }
    /**
     * @param int $kernelMemory
     *
     * @return self
     */
    public function setKernelMemory($kernelMemory = null)
    {
        $this->kernelMemory = $kernelMemory;
        return $this;
    }
    /**
     * @return int
     */
    public function getMemoryReservation()
    {
        return $this->memoryReservation;
    }
    /**
     * @param int $memoryReservation
     *
     * @return self
     */
    public function setMemoryReservation($memoryReservation = null)
    {
        $this->memoryReservation = $memoryReservation;
        return $this;
    }
    /**
     * @return int
     */
    public function getMemorySwap()
    {
        return $this->memorySwap;
    }
    /**
     * @param int $memorySwap
     *
     * @return self
     */
    public function setMemorySwap($memorySwap = null)
    {
        $this->memorySwap = $memorySwap;
        return $this;
    }
    /**
     * @return int
     */
    public function getMemorySwappiness()
    {
        return $this->memorySwappiness;
    }
    /**
     * @param int $memorySwappiness
     *
     * @return self
     */
    public function setMemorySwappiness($memorySwappiness = null)
    {
        $this->memorySwappiness = $memorySwappiness;
        return $this;
    }
    /**
     * @return int
     */
    public function getNanoCPUs()
    {
        return $this->nanoCPUs;
    }
    /**
     * @param int $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs($nanoCPUs = null)
    {
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOomKillDisable()
    {
        return $this->oomKillDisable;
    }
    /**
     * @param bool $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable($oomKillDisable = null)
    {
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /**
     * @return int
     */
    public function getPidsLimit()
    {
        return $this->pidsLimit;
    }
    /**
     * @param int $pidsLimit
     *
     * @return self
     */
    public function setPidsLimit($pidsLimit = null)
    {
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /**
     * @return ResourcesUlimitsItem[]
     */
    public function getUlimits()
    {
        return $this->ulimits;
    }
    /**
     * @param ResourcesUlimitsItem[] $ulimits
     *
     * @return self
     */
    public function setUlimits(array $ulimits = null)
    {
        $this->ulimits = $ulimits;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuCount()
    {
        return $this->cpuCount;
    }
    /**
     * @param int $cpuCount
     *
     * @return self
     */
    public function setCpuCount($cpuCount = null)
    {
        $this->cpuCount = $cpuCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getCpuPercent()
    {
        return $this->cpuPercent;
    }
    /**
     * @param int $cpuPercent
     *
     * @return self
     */
    public function setCpuPercent($cpuPercent = null)
    {
        $this->cpuPercent = $cpuPercent;
        return $this;
    }
    /**
     * @return int
     */
    public function getIOMaximumIOps()
    {
        return $this->iOMaximumIOps;
    }
    /**
     * @param int $iOMaximumIOps
     *
     * @return self
     */
    public function setIOMaximumIOps($iOMaximumIOps = null)
    {
        $this->iOMaximumIOps = $iOMaximumIOps;
        return $this;
    }
    /**
     * @return int
     */
    public function getIOMaximumBandwidth()
    {
        return $this->iOMaximumBandwidth;
    }
    /**
     * @param int $iOMaximumBandwidth
     *
     * @return self
     */
    public function setIOMaximumBandwidth($iOMaximumBandwidth = null)
    {
        $this->iOMaximumBandwidth = $iOMaximumBandwidth;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getBinds()
    {
        return $this->binds;
    }
    /**
     * @param string[] $binds
     *
     * @return self
     */
    public function setBinds(array $binds = null)
    {
        $this->binds = $binds;
        return $this;
    }
    /**
     * @return string
     */
    public function getContainerIDFile()
    {
        return $this->containerIDFile;
    }
    /**
     * @param string $containerIDFile
     *
     * @return self
     */
    public function setContainerIDFile($containerIDFile = null)
    {
        $this->containerIDFile = $containerIDFile;
        return $this;
    }
    /**
     * @return HostConfigLogConfig
     */
    public function getLogConfig()
    {
        return $this->logConfig;
    }
    /**
     * @param HostConfigLogConfig $logConfig
     *
     * @return self
     */
    public function setLogConfig(HostConfigLogConfig $logConfig = null)
    {
        $this->logConfig = $logConfig;
        return $this;
    }
    /**
     * @return string
     */
    public function getNetworkMode()
    {
        return $this->networkMode;
    }
    /**
     * @param string $networkMode
     *
     * @return self
     */
    public function setNetworkMode($networkMode = null)
    {
        $this->networkMode = $networkMode;
        return $this;
    }
    /**
     * @return HostConfigPortBindingsItem[]
     */
    public function getPortBindings()
    {
        return $this->portBindings;
    }
    /**
     * @param HostConfigPortBindingsItem[] $portBindings
     *
     * @return self
     */
    public function setPortBindings(\ArrayObject $portBindings = null)
    {
        $this->portBindings = $portBindings;
        return $this;
    }
    /**
     * @return RestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }
    /**
     * @param RestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(RestartPolicy $restartPolicy = null)
    {
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAutoRemove()
    {
        return $this->autoRemove;
    }
    /**
     * @param bool $autoRemove
     *
     * @return self
     */
    public function setAutoRemove($autoRemove = null)
    {
        $this->autoRemove = $autoRemove;
        return $this;
    }
    /**
     * @return string
     */
    public function getVolumeDriver()
    {
        return $this->volumeDriver;
    }
    /**
     * @param string $volumeDriver
     *
     * @return self
     */
    public function setVolumeDriver($volumeDriver = null)
    {
        $this->volumeDriver = $volumeDriver;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }
    /**
     * @param string[] $volumesFrom
     *
     * @return self
     */
    public function setVolumesFrom(array $volumesFrom = null)
    {
        $this->volumesFrom = $volumesFrom;
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
    /**
     * @return string[]
     */
    public function getCapAdd()
    {
        return $this->capAdd;
    }
    /**
     * @param string[] $capAdd
     *
     * @return self
     */
    public function setCapAdd(array $capAdd = null)
    {
        $this->capAdd = $capAdd;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getCapDrop()
    {
        return $this->capDrop;
    }
    /**
     * @param string[] $capDrop
     *
     * @return self
     */
    public function setCapDrop(array $capDrop = null)
    {
        $this->capDrop = $capDrop;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getDns()
    {
        return $this->dns;
    }
    /**
     * @param string[] $dns
     *
     * @return self
     */
    public function setDns(array $dns = null)
    {
        $this->dns = $dns;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getDnsOptions()
    {
        return $this->dnsOptions;
    }
    /**
     * @param string[] $dnsOptions
     *
     * @return self
     */
    public function setDnsOptions(array $dnsOptions = null)
    {
        $this->dnsOptions = $dnsOptions;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getDnsSearch()
    {
        return $this->dnsSearch;
    }
    /**
     * @param string[] $dnsSearch
     *
     * @return self
     */
    public function setDnsSearch(array $dnsSearch = null)
    {
        $this->dnsSearch = $dnsSearch;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getExtraHosts()
    {
        return $this->extraHosts;
    }
    /**
     * @param string[] $extraHosts
     *
     * @return self
     */
    public function setExtraHosts(array $extraHosts = null)
    {
        $this->extraHosts = $extraHosts;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getGroupAdd()
    {
        return $this->groupAdd;
    }
    /**
     * @param string[] $groupAdd
     *
     * @return self
     */
    public function setGroupAdd(array $groupAdd = null)
    {
        $this->groupAdd = $groupAdd;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpcMode()
    {
        return $this->ipcMode;
    }
    /**
     * @param string $ipcMode
     *
     * @return self
     */
    public function setIpcMode($ipcMode = null)
    {
        $this->ipcMode = $ipcMode;
        return $this;
    }
    /**
     * @return string
     */
    public function getCgroup()
    {
        return $this->cgroup;
    }
    /**
     * @param string $cgroup
     *
     * @return self
     */
    public function setCgroup($cgroup = null)
    {
        $this->cgroup = $cgroup;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLinks()
    {
        return $this->links;
    }
    /**
     * @param string[] $links
     *
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;
        return $this;
    }
    /**
     * @return int
     */
    public function getOomScoreAdj()
    {
        return $this->oomScoreAdj;
    }
    /**
     * @param int $oomScoreAdj
     *
     * @return self
     */
    public function setOomScoreAdj($oomScoreAdj = null)
    {
        $this->oomScoreAdj = $oomScoreAdj;
        return $this;
    }
    /**
     * @return string
     */
    public function getPidMode()
    {
        return $this->pidMode;
    }
    /**
     * @param string $pidMode
     *
     * @return self
     */
    public function setPidMode($pidMode = null)
    {
        $this->pidMode = $pidMode;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }
    /**
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged($privileged = null)
    {
        $this->privileged = $privileged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPublishAllPorts()
    {
        return $this->publishAllPorts;
    }
    /**
     * @param bool $publishAllPorts
     *
     * @return self
     */
    public function setPublishAllPorts($publishAllPorts = null)
    {
        $this->publishAllPorts = $publishAllPorts;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadonlyRootfs()
    {
        return $this->readonlyRootfs;
    }
    /**
     * @param bool $readonlyRootfs
     *
     * @return self
     */
    public function setReadonlyRootfs($readonlyRootfs = null)
    {
        $this->readonlyRootfs = $readonlyRootfs;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getSecurityOpt()
    {
        return $this->securityOpt;
    }
    /**
     * @param string[] $securityOpt
     *
     * @return self
     */
    public function setSecurityOpt(array $securityOpt = null)
    {
        $this->securityOpt = $securityOpt;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getStorageOpt()
    {
        return $this->storageOpt;
    }
    /**
     * @param string[] $storageOpt
     *
     * @return self
     */
    public function setStorageOpt(\ArrayObject $storageOpt = null)
    {
        $this->storageOpt = $storageOpt;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getTmpfs()
    {
        return $this->tmpfs;
    }
    /**
     * @param string[] $tmpfs
     *
     * @return self
     */
    public function setTmpfs(\ArrayObject $tmpfs = null)
    {
        $this->tmpfs = $tmpfs;
        return $this;
    }
    /**
     * @return string
     */
    public function getUTSMode()
    {
        return $this->uTSMode;
    }
    /**
     * @param string $uTSMode
     *
     * @return self
     */
    public function setUTSMode($uTSMode = null)
    {
        $this->uTSMode = $uTSMode;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsernsMode()
    {
        return $this->usernsMode;
    }
    /**
     * @param string $usernsMode
     *
     * @return self
     */
    public function setUsernsMode($usernsMode = null)
    {
        $this->usernsMode = $usernsMode;
        return $this;
    }
    /**
     * @return int
     */
    public function getShmSize()
    {
        return $this->shmSize;
    }
    /**
     * @param int $shmSize
     *
     * @return self
     */
    public function setShmSize($shmSize = null)
    {
        $this->shmSize = $shmSize;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getSysctls()
    {
        return $this->sysctls;
    }
    /**
     * @param string[] $sysctls
     *
     * @return self
     */
    public function setSysctls(\ArrayObject $sysctls = null)
    {
        $this->sysctls = $sysctls;
        return $this;
    }
    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }
    /**
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime($runtime = null)
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * @return int[]
     */
    public function getConsoleSize()
    {
        return $this->consoleSize;
    }
    /**
     * @param int[] $consoleSize
     *
     * @return self
     */
    public function setConsoleSize(array $consoleSize = null)
    {
        $this->consoleSize = $consoleSize;
        return $this;
    }
    /**
     * @return string
     */
    public function getIsolation()
    {
        return $this->isolation;
    }
    /**
     * @param string $isolation
     *
     * @return self
     */
    public function setIsolation($isolation = null)
    {
        $this->isolation = $isolation;
        return $this;
    }
}