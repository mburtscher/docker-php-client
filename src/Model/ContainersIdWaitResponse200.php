<?php

namespace DockerPhpClient\Model;

class ContainersIdWaitResponse200
{
    /**
     * @var int
     */
    protected $statusCode;
    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode($statusCode = null)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}