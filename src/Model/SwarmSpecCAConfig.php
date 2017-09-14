<?php

namespace DockerPhpClient\Model;

class SwarmSpecCAConfig
{
    /**
     * @var int
     */
    protected $nodeCertExpiry;
    /**
     * @var SwarmSpecCAConfigExternalCAsItem[]
     */
    protected $externalCAs;
    /**
     * @var string
     */
    protected $signingCACert;
    /**
     * @var string
     */
    protected $signingCAKey;
    /**
     * @var mixed
     */
    protected $forceRotate;
    /**
     * @return int
     */
    public function getNodeCertExpiry()
    {
        return $this->nodeCertExpiry;
    }
    /**
     * @param int $nodeCertExpiry
     *
     * @return self
     */
    public function setNodeCertExpiry($nodeCertExpiry = null)
    {
        $this->nodeCertExpiry = $nodeCertExpiry;
        return $this;
    }
    /**
     * @return SwarmSpecCAConfigExternalCAsItem[]
     */
    public function getExternalCAs()
    {
        return $this->externalCAs;
    }
    /**
     * @param SwarmSpecCAConfigExternalCAsItem[] $externalCAs
     *
     * @return self
     */
    public function setExternalCAs(array $externalCAs = null)
    {
        $this->externalCAs = $externalCAs;
        return $this;
    }
    /**
     * @return string
     */
    public function getSigningCACert()
    {
        return $this->signingCACert;
    }
    /**
     * @param string $signingCACert
     *
     * @return self
     */
    public function setSigningCACert($signingCACert = null)
    {
        $this->signingCACert = $signingCACert;
        return $this;
    }
    /**
     * @return string
     */
    public function getSigningCAKey()
    {
        return $this->signingCAKey;
    }
    /**
     * @param string $signingCAKey
     *
     * @return self
     */
    public function setSigningCAKey($signingCAKey = null)
    {
        $this->signingCAKey = $signingCAKey;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getForceRotate()
    {
        return $this->forceRotate;
    }
    /**
     * @param mixed $forceRotate
     *
     * @return self
     */
    public function setForceRotate($forceRotate = null)
    {
        $this->forceRotate = $forceRotate;
        return $this;
    }
}