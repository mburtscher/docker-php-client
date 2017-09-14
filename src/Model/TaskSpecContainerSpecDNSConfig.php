<?php

namespace DockerPhpClient\Model;

class TaskSpecContainerSpecDNSConfig
{
    /**
     * @var string[]
     */
    protected $nameservers;
    /**
     * @var string[]
     */
    protected $search;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @return string[]
     */
    public function getNameservers()
    {
        return $this->nameservers;
    }
    /**
     * @param string[] $nameservers
     *
     * @return self
     */
    public function setNameservers(array $nameservers = null)
    {
        $this->nameservers = $nameservers;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getSearch()
    {
        return $this->search;
    }
    /**
     * @param string[] $search
     *
     * @return self
     */
    public function setSearch(array $search = null)
    {
        $this->search = $search;
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
    public function setOptions(array $options = null)
    {
        $this->options = $options;
        return $this;
    }
}