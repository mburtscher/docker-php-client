<?php

namespace DockerPhpClient\Model;

class ServiceUpdateResponse
{
    /**
     * @var string[]
     */
    protected $warnings;
    /**
     * @return string[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
    /**
     * @param string[] $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings = null)
    {
        $this->warnings = $warnings;
        return $this;
    }
}