<?php

namespace DockerPhpClient\Model;

class VolumesResponse200
{
    /**
     * @var Volume[]
     */
    protected $volumes;
    /**
     * @var string[]
     */
    protected $warnings;
    /**
     * @return Volume[]
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /**
     * @param Volume[] $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes = null)
    {
        $this->volumes = $volumes;
        return $this;
    }
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