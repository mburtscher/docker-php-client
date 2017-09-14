<?php

namespace DockerPhpClient\Model;

class ServicesIdUpdateBody
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var TaskSpec
     */
    protected $taskTemplate;
    /**
     * @var ServiceSpecMode
     */
    protected $mode;
    /**
     * @var ServiceSpecUpdateConfig
     */
    protected $updateConfig;
    /**
     * @var ServiceSpecRollbackConfig
     */
    protected $rollbackConfig;
    /**
     * @var ServiceSpecNetworksItem[]
     */
    protected $networks;
    /**
     * @var EndpointSpec
     */
    protected $endpointSpec;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(\ArrayObject $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return TaskSpec
     */
    public function getTaskTemplate()
    {
        return $this->taskTemplate;
    }
    /**
     * @param TaskSpec $taskTemplate
     *
     * @return self
     */
    public function setTaskTemplate(TaskSpec $taskTemplate = null)
    {
        $this->taskTemplate = $taskTemplate;
        return $this;
    }
    /**
     * @return ServiceSpecMode
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * @param ServiceSpecMode $mode
     *
     * @return self
     */
    public function setMode(ServiceSpecMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * @return ServiceSpecUpdateConfig
     */
    public function getUpdateConfig()
    {
        return $this->updateConfig;
    }
    /**
     * @param ServiceSpecUpdateConfig $updateConfig
     *
     * @return self
     */
    public function setUpdateConfig(ServiceSpecUpdateConfig $updateConfig = null)
    {
        $this->updateConfig = $updateConfig;
        return $this;
    }
    /**
     * @return ServiceSpecRollbackConfig
     */
    public function getRollbackConfig()
    {
        return $this->rollbackConfig;
    }
    /**
     * @param ServiceSpecRollbackConfig $rollbackConfig
     *
     * @return self
     */
    public function setRollbackConfig(ServiceSpecRollbackConfig $rollbackConfig = null)
    {
        $this->rollbackConfig = $rollbackConfig;
        return $this;
    }
    /**
     * @return ServiceSpecNetworksItem[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /**
     * @param ServiceSpecNetworksItem[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks = null)
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * @return EndpointSpec
     */
    public function getEndpointSpec()
    {
        return $this->endpointSpec;
    }
    /**
     * @param EndpointSpec $endpointSpec
     *
     * @return self
     */
    public function setEndpointSpec(EndpointSpec $endpointSpec = null)
    {
        $this->endpointSpec = $endpointSpec;
        return $this;
    }
}