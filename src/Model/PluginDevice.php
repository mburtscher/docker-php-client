<?php

namespace DockerPhpClient\Model;

class PluginDevice
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string[]
     */
    protected $settable;
    /**
     * @var string
     */
    protected $path;
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
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getSettable()
    {
        return $this->settable;
    }
    /**
     * @param string[] $settable
     *
     * @return self
     */
    public function setSettable(array $settable = null)
    {
        $this->settable = $settable;
        return $this;
    }
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;
        return $this;
    }
}