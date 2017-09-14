<?php

namespace DockerPhpClient\Model;

class SwarmSpecCAConfigExternalCAsItem
{
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @var string
     */
    protected $uRL;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string
     */
    protected $cACert;
    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol($protocol = null)
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }
    /**
     * @param string $uRL
     *
     * @return self
     */
    public function setURL($uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(\ArrayObject $options = null)
    {
        $this->options = $options;
        return $this;
    }
    /**
     * @return string
     */
    public function getCACert()
    {
        return $this->cACert;
    }
    /**
     * @param string $cACert
     *
     * @return self
     */
    public function setCACert($cACert = null)
    {
        $this->cACert = $cACert;
        return $this;
    }
}