<?php

namespace DockerPhpClient\Model;

class ContainersIdJsonResponse200State
{
    /**
     * @var string
     */
    protected $status;
    /**
     * @var bool
     */
    protected $running;
    /**
     * @var bool
     */
    protected $paused;
    /**
     * @var bool
     */
    protected $restarting;
    /**
     * @var bool
     */
    protected $oOMKilled;
    /**
     * @var bool
     */
    protected $dead;
    /**
     * @var int
     */
    protected $pid;
    /**
     * @var int
     */
    protected $exitCode;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $finishedAt;
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;
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
     * @return bool
     */
    public function getPaused()
    {
        return $this->paused;
    }
    /**
     * @param bool $paused
     *
     * @return self
     */
    public function setPaused($paused = null)
    {
        $this->paused = $paused;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRestarting()
    {
        return $this->restarting;
    }
    /**
     * @param bool $restarting
     *
     * @return self
     */
    public function setRestarting($restarting = null)
    {
        $this->restarting = $restarting;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOOMKilled()
    {
        return $this->oOMKilled;
    }
    /**
     * @param bool $oOMKilled
     *
     * @return self
     */
    public function setOOMKilled($oOMKilled = null)
    {
        $this->oOMKilled = $oOMKilled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDead()
    {
        return $this->dead;
    }
    /**
     * @param bool $dead
     *
     * @return self
     */
    public function setDead($dead = null)
    {
        $this->dead = $dead;
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
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * @param string $error
     *
     * @return self
     */
    public function setError($error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * @return string
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }
    /**
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt($startedAt = null)
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }
    /**
     * @param string $finishedAt
     *
     * @return self
     */
    public function setFinishedAt($finishedAt = null)
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }
}