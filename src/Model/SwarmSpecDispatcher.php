<?php

namespace DockerPhpClient\Model;

class SwarmSpecDispatcher
{
    /**
     * @var int
     */
    protected $heartbeatPeriod;
    /**
     * @return int
     */
    public function getHeartbeatPeriod()
    {
        return $this->heartbeatPeriod;
    }
    /**
     * @param int $heartbeatPeriod
     *
     * @return self
     */
    public function setHeartbeatPeriod($heartbeatPeriod = null)
    {
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }
}