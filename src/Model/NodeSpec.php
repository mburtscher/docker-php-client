<?php

namespace DockerPhpClient\Model;

class NodeSpec
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
     * @var string
     */
    protected $role;
    /**
     * @var string
     */
    protected $availability;
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
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole($role = null)
    {
        $this->role = $role;
        return $this;
    }
    /**
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }
    /**
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability($availability = null)
    {
        $this->availability = $availability;
        return $this;
    }
}