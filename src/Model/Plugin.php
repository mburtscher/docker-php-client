<?php

namespace DockerPhpClient\Model;

class Plugin
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var PluginSettings
     */
    protected $settings;
    /**
     * @var string
     */
    protected $pluginReference;
    /**
     * @var PluginConfig
     */
    protected $config;
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
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
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled($enabled = null)
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * @return PluginSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }
    /**
     * @param PluginSettings $settings
     *
     * @return self
     */
    public function setSettings(PluginSettings $settings = null)
    {
        $this->settings = $settings;
        return $this;
    }
    /**
     * @return string
     */
    public function getPluginReference()
    {
        return $this->pluginReference;
    }
    /**
     * @param string $pluginReference
     *
     * @return self
     */
    public function setPluginReference($pluginReference = null)
    {
        $this->pluginReference = $pluginReference;
        return $this;
    }
    /**
     * @return PluginConfig
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param PluginConfig $config
     *
     * @return self
     */
    public function setConfig(PluginConfig $config = null)
    {
        $this->config = $config;
        return $this;
    }
}