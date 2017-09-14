<?php

namespace DockerPhpClient\Model;

class DistributionNameJsonResponse200PlatformsItem
{
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $oS;
    /**
     * @var string
     */
    protected $oSVersion;
    /**
     * @var string[]
     */
    protected $oSFeatures;
    /**
     * @var string
     */
    protected $variant;
    /**
     * @var string[]
     */
    protected $features;
    /**
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }
    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture($architecture = null)
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * @return string
     */
    public function getOS()
    {
        return $this->oS;
    }
    /**
     * @param string $oS
     *
     * @return self
     */
    public function setOS($oS = null)
    {
        $this->oS = $oS;
        return $this;
    }
    /**
     * @return string
     */
    public function getOSVersion()
    {
        return $this->oSVersion;
    }
    /**
     * @param string $oSVersion
     *
     * @return self
     */
    public function setOSVersion($oSVersion = null)
    {
        $this->oSVersion = $oSVersion;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getOSFeatures()
    {
        return $this->oSFeatures;
    }
    /**
     * @param string[] $oSFeatures
     *
     * @return self
     */
    public function setOSFeatures(array $oSFeatures = null)
    {
        $this->oSFeatures = $oSFeatures;
        return $this;
    }
    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }
    /**
     * @param string $variant
     *
     * @return self
     */
    public function setVariant($variant = null)
    {
        $this->variant = $variant;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->features;
    }
    /**
     * @param string[] $features
     *
     * @return self
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;
        return $this;
    }
}