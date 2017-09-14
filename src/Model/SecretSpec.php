<?php

namespace DockerPhpClient\Model;

class SecretSpec
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
    protected $data;
    /**
     * @var Driver
     */
    protected $driver;
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
    public function getData()
    {
        return $this->data;
    }
    /**
     * @param string $data
     *
     * @return self
     */
    public function setData($data = null)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * @return Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }
    /**
     * @param Driver $driver
     *
     * @return self
     */
    public function setDriver(Driver $driver = null)
    {
        $this->driver = $driver;
        return $this;
    }
}