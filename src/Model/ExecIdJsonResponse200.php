<?php

namespace DockerPhpClient\Model;

class ExecIdJsonResponse200
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var bool
     */
    protected $running;
    /**
     * @var int
     */
    protected $exitCode;
    /**
     * @var ProcessConfig
     */
    protected $processConfig;
    /**
     * @var bool
     */
    protected $openStdin;
    /**
     * @var bool
     */
    protected $openStderr;
    /**
     * @var bool
     */
    protected $openStdout;
    /**
     * @var string
     */
    protected $containerID;
    /**
     * @var int
     */
    protected $pid;
    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }
    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRunning()
    {
        return $this->running;
    }
    /**
     * @param bool $running
     *
     * @return self
     */
    public function setRunning($running = null)
    {
        $this->running = $running;
        return $this;
    }
    /**
     * @return int
     */
    public function getExitCode()
    {
        return $this->exitCode;
    }
    /**
     * @param int $exitCode
     *
     * @return self
     */
    public function setExitCode($exitCode = null)
    {
        $this->exitCode = $exitCode;
        return $this;
    }
    /**
     * @return ProcessConfig
     */
    public function getProcessConfig()
    {
        return $this->processConfig;
    }
    /**
     * @param ProcessConfig $processConfig
     *
     * @return self
     */
    public function setProcessConfig(ProcessConfig $processConfig = null)
    {
        $this->processConfig = $processConfig;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOpenStdin()
    {
        return $this->openStdin;
    }
    /**
     * @param bool $openStdin
     *
     * @return self
     */
    public function setOpenStdin($openStdin = null)
    {
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOpenStderr()
    {
        return $this->openStderr;
    }
    /**
     * @param bool $openStderr
     *
     * @return self
     */
    public function setOpenStderr($openStderr = null)
    {
        $this->openStderr = $openStderr;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOpenStdout()
    {
        return $this->openStdout;
    }
    /**
     * @param bool $openStdout
     *
     * @return self
     */
    public function setOpenStdout($openStdout = null)
    {
        $this->openStdout = $openStdout;
        return $this;
    }
    /**
     * @return string
     */
    public function getContainerID()
    {
        return $this->containerID;
    }
    /**
     * @param string $containerID
     *
     * @return self
     */
    public function setContainerID($containerID = null)
    {
        $this->containerID = $containerID;
        return $this;
    }
    /**
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }
    /**
     * @param int $pid
     *
     * @return self
     */
    public function setPid($pid = null)
    {
        $this->pid = $pid;
        return $this;
    }
}