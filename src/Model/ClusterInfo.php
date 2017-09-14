<?php

namespace DockerPhpClient\Model;

class ClusterInfo
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var ObjectVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var SwarmSpec
     */
    protected $spec;
    /**
     * @var TLSInfo
     */
    protected $tLSInfo;
    /**
     * @var bool
     */
    protected $rootRotationInProgress;
    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }
    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * @return ObjectVersion
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @param ObjectVersion $version
     *
     * @return self
     */
    public function setVersion(ObjectVersion $version = null)
    {
        $this->version = $version;
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
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return SwarmSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
    /**
     * @param SwarmSpec $spec
     *
     * @return self
     */
    public function setSpec(SwarmSpec $spec = null)
    {
        $this->spec = $spec;
        return $this;
    }
    /**
     * @return TLSInfo
     */
    public function getTLSInfo()
    {
        return $this->tLSInfo;
    }
    /**
     * @param TLSInfo $tLSInfo
     *
     * @return self
     */
    public function setTLSInfo(TLSInfo $tLSInfo = null)
    {
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRootRotationInProgress()
    {
        return $this->rootRotationInProgress;
    }
    /**
     * @param bool $rootRotationInProgress
     *
     * @return self
     */
    public function setRootRotationInProgress($rootRotationInProgress = null)
    {
        $this->rootRotationInProgress = $rootRotationInProgress;
        return $this;
    }
}