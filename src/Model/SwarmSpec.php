<?php

namespace DockerPhpClient\Model;

class SwarmSpec
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
     * @var SwarmSpecOrchestration
     */
    protected $orchestration;
    /**
     * @var SwarmSpecRaft
     */
    protected $raft;
    /**
     * @var SwarmSpecDispatcher
     */
    protected $dispatcher;
    /**
     * @var SwarmSpecCAConfig
     */
    protected $cAConfig;
    /**
     * @var SwarmSpecEncryptionConfig
     */
    protected $encryptionConfig;
    /**
     * @var SwarmSpecTaskDefaults
     */
    protected $taskDefaults;
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
     * @return SwarmSpecOrchestration
     */
    public function getOrchestration()
    {
        return $this->orchestration;
    }
    /**
     * @param SwarmSpecOrchestration $orchestration
     *
     * @return self
     */
    public function setOrchestration(SwarmSpecOrchestration $orchestration = null)
    {
        $this->orchestration = $orchestration;
        return $this;
    }
    /**
     * @return SwarmSpecRaft
     */
    public function getRaft()
    {
        return $this->raft;
    }
    /**
     * @param SwarmSpecRaft $raft
     *
     * @return self
     */
    public function setRaft(SwarmSpecRaft $raft = null)
    {
        $this->raft = $raft;
        return $this;
    }
    /**
     * @return SwarmSpecDispatcher
     */
    public function getDispatcher()
    {
        return $this->dispatcher;
    }
    /**
     * @param SwarmSpecDispatcher $dispatcher
     *
     * @return self
     */
    public function setDispatcher(SwarmSpecDispatcher $dispatcher = null)
    {
        $this->dispatcher = $dispatcher;
        return $this;
    }
    /**
     * @return SwarmSpecCAConfig
     */
    public function getCAConfig()
    {
        return $this->cAConfig;
    }
    /**
     * @param SwarmSpecCAConfig $cAConfig
     *
     * @return self
     */
    public function setCAConfig(SwarmSpecCAConfig $cAConfig = null)
    {
        $this->cAConfig = $cAConfig;
        return $this;
    }
    /**
     * @return SwarmSpecEncryptionConfig
     */
    public function getEncryptionConfig()
    {
        return $this->encryptionConfig;
    }
    /**
     * @param SwarmSpecEncryptionConfig $encryptionConfig
     *
     * @return self
     */
    public function setEncryptionConfig(SwarmSpecEncryptionConfig $encryptionConfig = null)
    {
        $this->encryptionConfig = $encryptionConfig;
        return $this;
    }
    /**
     * @return SwarmSpecTaskDefaults
     */
    public function getTaskDefaults()
    {
        return $this->taskDefaults;
    }
    /**
     * @param SwarmSpecTaskDefaults $taskDefaults
     *
     * @return self
     */
    public function setTaskDefaults(SwarmSpecTaskDefaults $taskDefaults = null)
    {
        $this->taskDefaults = $taskDefaults;
        return $this;
    }
}