<?php

namespace DockerPhpClient\Model;

class ServiceSpecRollbackConfig
{
    /**
     * @var int
     */
    protected $parallelism;
    /**
     * @var int
     */
    protected $delay;
    /**
     * @var string
     */
    protected $failureAction;
    /**
     * @var int
     */
    protected $monitor;
    /**
     * @var float
     */
    protected $maxFailureRatio;
    /**
     * @var string
     */
    protected $order;
    /**
     * @return int
     */
    public function getParallelism()
    {
        return $this->parallelism;
    }
    /**
     * @param int $parallelism
     *
     * @return self
     */
    public function setParallelism($parallelism = null)
    {
        $this->parallelism = $parallelism;
        return $this;
    }
    /**
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }
    /**
     * @param int $delay
     *
     * @return self
     */
    public function setDelay($delay = null)
    {
        $this->delay = $delay;
        return $this;
    }
    /**
     * @return string
     */
    public function getFailureAction()
    {
        return $this->failureAction;
    }
    /**
     * @param string $failureAction
     *
     * @return self
     */
    public function setFailureAction($failureAction = null)
    {
        $this->failureAction = $failureAction;
        return $this;
    }
    /**
     * @return int
     */
    public function getMonitor()
    {
        return $this->monitor;
    }
    /**
     * @param int $monitor
     *
     * @return self
     */
    public function setMonitor($monitor = null)
    {
        $this->monitor = $monitor;
        return $this;
    }
    /**
     * @return float
     */
    public function getMaxFailureRatio()
    {
        return $this->maxFailureRatio;
    }
    /**
     * @param float $maxFailureRatio
     *
     * @return self
     */
    public function setMaxFailureRatio($maxFailureRatio = null)
    {
        $this->maxFailureRatio = $maxFailureRatio;
        return $this;
    }
    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * @param string $order
     *
     * @return self
     */
    public function setOrder($order = null)
    {
        $this->order = $order;
        return $this;
    }
}