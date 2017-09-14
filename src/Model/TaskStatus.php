<?php

namespace DockerPhpClient\Model;

class TaskStatus
{
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $err;
    /**
     * @var TaskStatusContainerStatus
     */
    protected $containerStatus;
    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp = null)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState($state = null)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getErr()
    {
        return $this->err;
    }
    /**
     * @param string $err
     *
     * @return self
     */
    public function setErr($err = null)
    {
        $this->err = $err;
        return $this;
    }
    /**
     * @return TaskStatusContainerStatus
     */
    public function getContainerStatus()
    {
        return $this->containerStatus;
    }
    /**
     * @param TaskStatusContainerStatus $containerStatus
     *
     * @return self
     */
    public function setContainerStatus(TaskStatusContainerStatus $containerStatus = null)
    {
        $this->containerStatus = $containerStatus;
        return $this;
    }
}