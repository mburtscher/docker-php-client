<?php

namespace DockerPhpClient\Model;

class PluginsNameUpgradeBodyItem
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
    protected $value;
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
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string[] $value
     *
     * @return self
     */
    public function setValue(array $value = null)
    {
        $this->value = $value;
        return $this;
    }
}