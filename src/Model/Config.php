<?php

namespace DockerPhpClient\Model;

class Config
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
     * @var ConfigSpec
     */
    protected $spec;
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
     * @return ConfigSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
    /**
     * @param ConfigSpec $spec
     *
     * @return self
     */
    public function setSpec(ConfigSpec $spec = null)
    {
        $this->spec = $spec;
        return $this;
    }
}