<?php

namespace DockerPhpClient\Model;

class Service
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
     * @var ServiceSpec
     */
    protected $spec;
    /**
     * @var ServiceEndpoint
     */
    protected $endpoint;
    /**
     * @var ServiceUpdateStatus
     */
    protected $updateStatus;
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
     * @return ServiceSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
    /**
     * @param ServiceSpec $spec
     *
     * @return self
     */
    public function setSpec(ServiceSpec $spec = null)
    {
        $this->spec = $spec;
        return $this;
    }
    /**
     * @return ServiceEndpoint
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
    /**
     * @param ServiceEndpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(ServiceEndpoint $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * @return ServiceUpdateStatus
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
    }
    /**
     * @param ServiceUpdateStatus $updateStatus
     *
     * @return self
     */
    public function setUpdateStatus(ServiceUpdateStatus $updateStatus = null)
    {
        $this->updateStatus = $updateStatus;
        return $this;
    }
}