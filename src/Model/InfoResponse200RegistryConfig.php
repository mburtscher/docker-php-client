<?php

namespace DockerPhpClient\Model;

class InfoResponse200RegistryConfig
{
    /**
     * @var InfoResponse200RegistryConfigIndexConfigsItem[]
     */
    protected $indexConfigs;
    /**
     * @var string[]
     */
    protected $insecureRegistryCIDRs;
    /**
     * @return InfoResponse200RegistryConfigIndexConfigsItem[]
     */
    public function getIndexConfigs()
    {
        return $this->indexConfigs;
    }
    /**
     * @param InfoResponse200RegistryConfigIndexConfigsItem[] $indexConfigs
     *
     * @return self
     */
    public function setIndexConfigs(\ArrayObject $indexConfigs = null)
    {
        $this->indexConfigs = $indexConfigs;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getInsecureRegistryCIDRs()
    {
        return $this->insecureRegistryCIDRs;
    }
    /**
     * @param string[] $insecureRegistryCIDRs
     *
     * @return self
     */
    public function setInsecureRegistryCIDRs(array $insecureRegistryCIDRs = null)
    {
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;
        return $this;
    }
}