<?php

namespace DockerPhpClient\Model;

class DistributionNameJsonResponse200
{
    /**
     * @var DistributionNameJsonResponse200Descriptor
     */
    protected $descriptor;
    /**
     * @var DistributionNameJsonResponse200PlatformsItem[]
     */
    protected $platforms;
    /**
     * @return DistributionNameJsonResponse200Descriptor
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }
    /**
     * @param DistributionNameJsonResponse200Descriptor $descriptor
     *
     * @return self
     */
    public function setDescriptor(DistributionNameJsonResponse200Descriptor $descriptor = null)
    {
        $this->descriptor = $descriptor;
        return $this;
    }
    /**
     * @return DistributionNameJsonResponse200PlatformsItem[]
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }
    /**
     * @param DistributionNameJsonResponse200PlatformsItem[] $platforms
     *
     * @return self
     */
    public function setPlatforms(array $platforms = null)
    {
        $this->platforms = $platforms;
        return $this;
    }
}