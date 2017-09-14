<?php

namespace DockerPhpClient\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
{
    /**
     * @var bool
     */
    protected $disable;
    /**
     * @var string
     */
    protected $user;
    /**
     * @var string
     */
    protected $role;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $level;
    /**
     * @return bool
     */
    public function getDisable()
    {
        return $this->disable;
    }
    /**
     * @param bool $disable
     *
     * @return self
     */
    public function setDisable($disable = null)
    {
        $this->disable = $disable;
        return $this;
    }
    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser($user = null)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole($role = null)
    {
        $this->role = $role;
        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * @param string $level
     *
     * @return self
     */
    public function setLevel($level = null)
    {
        $this->level = $level;
        return $this;
    }
}