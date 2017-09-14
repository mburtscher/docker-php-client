<?php

namespace DockerPhpClient\Model;

class SwarmInitBody
{
    /**
     * @var string
     */
    protected $listenAddr;
    /**
     * @var string
     */
    protected $advertiseAddr;
    /**
     * @var string
     */
    protected $dataPathAddr;
    /**
     * @var bool
     */
    protected $forceNewCluster;
    /**
     * @var SwarmSpec
     */
    protected $spec;
    /**
     * @return string
     */
    public function getListenAddr()
    {
        return $this->listenAddr;
    }
    /**
     * @param string $listenAddr
     *
     * @return self
     */
    public function setListenAddr($listenAddr = null)
    {
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
     * @return string
     */
    public function getAdvertiseAddr()
    {
        return $this->advertiseAddr;
    }
    /**
     * @param string $advertiseAddr
     *
     * @return self
     */
    public function setAdvertiseAddr($advertiseAddr = null)
    {
        $this->advertiseAddr = $advertiseAddr;
        return $this;
    }
    /**
     * @return string
     */
    public function getDataPathAddr()
    {
        return $this->dataPathAddr;
    }
    /**
     * @param string $dataPathAddr
     *
     * @return self
     */
    public function setDataPathAddr($dataPathAddr = null)
    {
        $this->dataPathAddr = $dataPathAddr;
        return $this;
    }
    /**
     * @return bool
     */
    public function getForceNewCluster()
    {
        return $this->forceNewCluster;
    }
    /**
     * @param bool $forceNewCluster
     *
     * @return self
     */
    public function setForceNewCluster($forceNewCluster = null)
    {
        $this->forceNewCluster = $forceNewCluster;
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
}