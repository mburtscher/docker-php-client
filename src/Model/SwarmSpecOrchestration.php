<?php

namespace DockerPhpClient\Model;

class SwarmSpecOrchestration
{
    /**
     * @var int
     */
    protected $taskHistoryRetentionLimit;
    /**
     * @return int
     */
    public function getTaskHistoryRetentionLimit()
    {
        return $this->taskHistoryRetentionLimit;
    }
    /**
     * @param int $taskHistoryRetentionLimit
     *
     * @return self
     */
    public function setTaskHistoryRetentionLimit($taskHistoryRetentionLimit = null)
    {
        $this->taskHistoryRetentionLimit = $taskHistoryRetentionLimit;
        return $this;
    }
}