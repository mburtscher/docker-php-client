<?php

namespace DockerPhpClient\Model;

class MountVolumeOptions
{
    /**
     * @var bool
     */
    protected $noCopy;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var MountVolumeOptionsDriverConfig
     */
    protected $driverConfig;
    /**
     * @return bool
     */
    public function getNoCopy()
    {
        return $this->noCopy;
    }
    /**
     * @param bool $noCopy
     *
     * @return self
     */
    public function setNoCopy($noCopy = null)
    {
        $this->noCopy = $noCopy;
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
     * @return MountVolumeOptionsDriverConfig
     */
    public function getDriverConfig()
    {
        return $this->driverConfig;
    }
    /**
     * @param MountVolumeOptionsDriverConfig $driverConfig
     *
     * @return self
     */
    public function setDriverConfig(MountVolumeOptionsDriverConfig $driverConfig = null)
    {
        $this->driverConfig = $driverConfig;
        return $this;
    }
}