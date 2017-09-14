<?php

namespace DockerPhpClient\Model;

class TaskSpecPluginSpec
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $remote;
    /**
     * @var bool
     */
    protected $disabled;
    /**
     * @var TaskSpecPluginSpecPluginPrivilegeItem[]
     */
    protected $pluginPrivilege;
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
     * @return string
     */
    public function getRemote()
    {
        return $this->remote;
    }
    /**
     * @param string $remote
     *
     * @return self
     */
    public function setRemote($remote = null)
    {
        $this->remote = $remote;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }
    /**
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled($disabled = null)
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * @return TaskSpecPluginSpecPluginPrivilegeItem[]
     */
    public function getPluginPrivilege()
    {
        return $this->pluginPrivilege;
    }
    /**
     * @param TaskSpecPluginSpecPluginPrivilegeItem[] $pluginPrivilege
     *
     * @return self
     */
    public function setPluginPrivilege(array $pluginPrivilege = null)
    {
        $this->pluginPrivilege = $pluginPrivilege;
        return $this;
    }
}