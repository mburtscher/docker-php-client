<?php

namespace DockerPhpClient\Model;

class BuildPruneResponse200
{
    /**
     * @var int
     */
    protected $spaceReclaimed;
    /**
     * @return int
     */
    public function getSpaceReclaimed()
    {
        return $this->spaceReclaimed;
    }
    /**
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed($spaceReclaimed = null)
    {
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}