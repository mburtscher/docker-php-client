<?php

namespace DockerPhpClient\Model;

class Mount
{
    /**
     * @var string
     */
    protected $target;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @var string
     */
    protected $consistency;
    /**
     * @var MountBindOptions
     */
    protected $bindOptions;
    /**
     * @var MountVolumeOptions
     */
    protected $volumeOptions;
    /**
     * @var MountTmpfsOptions
     */
    protected $tmpfsOptions;
    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
    /**
     * @param string $target
     *
     * @return self
     */
    public function setTarget($target = null)
    {
        $this->target = $target;
        return $this;
    }
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }
    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly($readOnly = null)
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * @return string
     */
    public function getConsistency()
    {
        return $this->consistency;
    }
    /**
     * @param string $consistency
     *
     * @return self
     */
    public function setConsistency($consistency = null)
    {
        $this->consistency = $consistency;
        return $this;
    }
    /**
     * @return MountBindOptions
     */
    public function getBindOptions()
    {
        return $this->bindOptions;
    }
    /**
     * @param MountBindOptions $bindOptions
     *
     * @return self
     */
    public function setBindOptions(MountBindOptions $bindOptions = null)
    {
        $this->bindOptions = $bindOptions;
        return $this;
    }
    /**
     * @return MountVolumeOptions
     */
    public function getVolumeOptions()
    {
        return $this->volumeOptions;
    }
    /**
     * @param MountVolumeOptions $volumeOptions
     *
     * @return self
     */
    public function setVolumeOptions(MountVolumeOptions $volumeOptions = null)
    {
        $this->volumeOptions = $volumeOptions;
        return $this;
    }
    /**
     * @return MountTmpfsOptions
     */
    public function getTmpfsOptions()
    {
        return $this->tmpfsOptions;
    }
    /**
     * @param MountTmpfsOptions $tmpfsOptions
     *
     * @return self
     */
    public function setTmpfsOptions(MountTmpfsOptions $tmpfsOptions = null)
    {
        $this->tmpfsOptions = $tmpfsOptions;
        return $this;
    }
}