<?php

namespace DockerPhpClient\Model;

class HealthConfig
{
    /**
     * @var string[]
     */
    protected $test;
    /**
     * @var int
     */
    protected $interval;
    /**
     * @var int
     */
    protected $timeout;
    /**
     * @var int
     */
    protected $retries;
    /**
     * @var int
     */
    protected $startPeriod;
    /**
     * @return string[]
     */
    public function getTest()
    {
        return $this->test;
    }
    /**
     * @param string[] $test
     *
     * @return self
     */
    public function setTest(array $test = null)
    {
        $this->test = $test;
        return $this;
    }
    /**
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }
    /**
     * @param int $interval
     *
     * @return self
     */
    public function setInterval($interval = null)
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
    /**
     * @param int $timeout
     *
     * @return self
     */
    public function setTimeout($timeout = null)
    {
        $this->timeout = $timeout;
        return $this;
    }
    /**
     * @return int
     */
    public function getRetries()
    {
        return $this->retries;
    }
    /**
     * @param int $retries
     *
     * @return self
     */
    public function setRetries($retries = null)
    {
        $this->retries = $retries;
        return $this;
    }
    /**
     * @return int
     */
    public function getStartPeriod()
    {
        return $this->startPeriod;
    }
    /**
     * @param int $startPeriod
     *
     * @return self
     */
    public function setStartPeriod($startPeriod = null)
    {
        $this->startPeriod = $startPeriod;
        return $this;
    }
}