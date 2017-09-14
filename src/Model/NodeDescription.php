<?php

namespace DockerPhpClient\Model;

class NodeDescription
{
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var NodeDescriptionPlatform
     */
    protected $platform;
    /**
     * @var NodeDescriptionResources
     */
    protected $resources;
    /**
     * @var NodeDescriptionEngine
     */
    protected $engine;
    /**
     * @var SwarmSpec
     */
    protected $tLSInfo;
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
     * @return NodeDescriptionPlatform
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    /**
     * @param NodeDescriptionPlatform $platform
     *
     * @return self
     */
    public function setPlatform(NodeDescriptionPlatform $platform = null)
    {
        $this->platform = $platform;
        return $this;
    }
    /**
     * @return NodeDescriptionResources
     */
    public function getResources()
    {
        return $this->resources;
    }
    /**
     * @param NodeDescriptionResources $resources
     *
     * @return self
     */
    public function setResources(NodeDescriptionResources $resources = null)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * @return NodeDescriptionEngine
     */
    public function getEngine()
    {
        return $this->engine;
    }
    /**
     * @param NodeDescriptionEngine $engine
     *
     * @return self
     */
    public function setEngine(NodeDescriptionEngine $engine = null)
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * @return SwarmSpec
     */
    public function getTLSInfo()
    {
        return $this->tLSInfo;
    }
    /**
     * @param SwarmSpec $tLSInfo
     *
     * @return self
     */
    public function setTLSInfo(SwarmSpec $tLSInfo = null)
    {
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
}