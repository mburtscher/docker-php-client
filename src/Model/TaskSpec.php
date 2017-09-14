<?php

namespace DockerPhpClient\Model;

class TaskSpec
{
    /**
     * @var TaskSpecPluginSpec
     */
    protected $pluginSpec;
    /**
     * @var TaskSpecContainerSpec
     */
    protected $containerSpec;
    /**
     * @var TaskSpecResources
     */
    protected $resources;
    /**
     * @var TaskSpecRestartPolicy
     */
    protected $restartPolicy;
    /**
     * @var TaskSpecPlacement
     */
    protected $placement;
    /**
     * @var int
     */
    protected $forceUpdate;
    /**
     * @var string
     */
    protected $runtime;
    /**
     * @var TaskSpecNetworksItem[]
     */
    protected $networks;
    /**
     * @var TaskSpecLogDriver
     */
    protected $logDriver;
    /**
     * @return TaskSpecPluginSpec
     */
    public function getPluginSpec()
    {
        return $this->pluginSpec;
    }
    /**
     * @param TaskSpecPluginSpec $pluginSpec
     *
     * @return self
     */
    public function setPluginSpec(TaskSpecPluginSpec $pluginSpec = null)
    {
        $this->pluginSpec = $pluginSpec;
        return $this;
    }
    /**
     * @return TaskSpecContainerSpec
     */
    public function getContainerSpec()
    {
        return $this->containerSpec;
    }
    /**
     * @param TaskSpecContainerSpec $containerSpec
     *
     * @return self
     */
    public function setContainerSpec(TaskSpecContainerSpec $containerSpec = null)
    {
        $this->containerSpec = $containerSpec;
        return $this;
    }
    /**
     * @return TaskSpecResources
     */
    public function getResources()
    {
        return $this->resources;
    }
    /**
     * @param TaskSpecResources $resources
     *
     * @return self
     */
    public function setResources(TaskSpecResources $resources = null)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * @return TaskSpecRestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }
    /**
     * @param TaskSpecRestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(TaskSpecRestartPolicy $restartPolicy = null)
    {
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
     * @return TaskSpecPlacement
     */
    public function getPlacement()
    {
        return $this->placement;
    }
    /**
     * @param TaskSpecPlacement $placement
     *
     * @return self
     */
    public function setPlacement(TaskSpecPlacement $placement = null)
    {
        $this->placement = $placement;
        return $this;
    }
    /**
     * @return int
     */
    public function getForceUpdate()
    {
        return $this->forceUpdate;
    }
    /**
     * @param int $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate($forceUpdate = null)
    {
        $this->forceUpdate = $forceUpdate;
        return $this;
    }
    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }
    /**
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime($runtime = null)
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * @return TaskSpecNetworksItem[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /**
     * @param TaskSpecNetworksItem[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks = null)
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * @return TaskSpecLogDriver
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }
    /**
     * @param TaskSpecLogDriver $logDriver
     *
     * @return self
     */
    public function setLogDriver(TaskSpecLogDriver $logDriver = null)
    {
        $this->logDriver = $logDriver;
        return $this;
    }
}