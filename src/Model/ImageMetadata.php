<?php

namespace DockerPhpClient\Model;

class ImageMetadata
{
    /**
     * @var string
     */
    protected $lastTagTime;
    /**
     * @return string
     */
    public function getLastTagTime()
    {
        return $this->lastTagTime;
    }
    /**
     * @param string $lastTagTime
     *
     * @return self
     */
    public function setLastTagTime($lastTagTime = null)
    {
        $this->lastTagTime = $lastTagTime;
        return $this;
    }
}