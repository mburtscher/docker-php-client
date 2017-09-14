<?php

namespace DockerPhpClient\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * @var bool
     */
    protected $autoLockManagers;
    /**
     * @return bool
     */
    public function getAutoLockManagers()
    {
        return $this->autoLockManagers;
    }
    /**
     * @param bool $autoLockManagers
     *
     * @return self
     */
    public function setAutoLockManagers($autoLockManagers = null)
    {
        $this->autoLockManagers = $autoLockManagers;
        return $this;
    }
}