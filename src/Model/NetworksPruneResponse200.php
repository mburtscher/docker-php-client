<?php

namespace DockerPhpClient\Model;

class NetworksPruneResponse200
{
    /**
     * @var string[]
     */
    protected $networksDeleted;
    /**
     * @return string[]
     */
    public function getNetworksDeleted()
    {
        return $this->networksDeleted;
    }
    /**
     * @param string[] $networksDeleted
     *
     * @return self
     */
    public function setNetworksDeleted(array $networksDeleted = null)
    {
        $this->networksDeleted = $networksDeleted;
        return $this;
    }
}