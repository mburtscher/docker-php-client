<?php

namespace DockerPhpClient\Model;

class ContainersIdUpdateBody
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
     * @var RestartPolicy
     */
    protected $restartPolicy;
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
}