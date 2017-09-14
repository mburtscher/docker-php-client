<?php

namespace DockerPhpClient\Model;

class TaskSpecContainerSpecConfigsItem
{
    /**
     * @var TaskSpecContainerSpecConfigsItemFile
     */
    protected $file;
    /**
     * @var string
     */
    protected $configID;
    /**
     * @var string
     */
    protected $configName;
    /**
     * @return TaskSpecContainerSpecConfigsItemFile
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * @param TaskSpecContainerSpecConfigsItemFile $file
     *
     * @return self
     */
    public function setFile(TaskSpecContainerSpecConfigsItemFile $file = null)
    {
        $this->file = $file;
        return $this;
    }
    /**
     * @return string
     */
    public function getConfigID()
    {
        return $this->configID;
    }
    /**
     * @param string $configID
     *
     * @return self
     */
    public function setConfigID($configID = null)
    {
        $this->configID = $configID;
        return $this;
    }
    /**
     * @return string
     */
    public function getConfigName()
    {
        return $this->configName;
    }
    /**
     * @param string $configName
     *
     * @return self
     */
    public function setConfigName($configName = null)
    {
        $this->configName = $configName;
        return $this;
    }
}