<?php

namespace DockerPhpClient\Model;

class DistributionNameJsonResponse200Descriptor
{
    /**
     * @var string
     */
    protected $mediaType;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var string
     */
    protected $digest;
    /**
     * @var string[]
     */
    protected $uRLs;
    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }
    /**
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType($mediaType = null)
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }
    /**
     * @param string $digest
     *
     * @return self
     */
    public function setDigest($digest = null)
    {
        $this->digest = $digest;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getURLs()
    {
        return $this->uRLs;
    }
    /**
     * @param string[] $uRLs
     *
     * @return self
     */
    public function setURLs(array $uRLs = null)
    {
        $this->uRLs = $uRLs;
        return $this;
    }
}