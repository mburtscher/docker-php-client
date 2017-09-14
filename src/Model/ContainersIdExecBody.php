<?php

namespace DockerPhpClient\Model;

class ContainersIdExecBody
{
    /**
     * @var bool
     */
    protected $attachStdin;
    /**
     * @var bool
     */
    protected $attachStdout;
    /**
     * @var bool
     */
    protected $attachStderr;
    /**
     * @var string
     */
    protected $detachKeys;
    /**
     * @var bool
     */
    protected $tty;
    /**
     * @var string[]
     */
    protected $env;
    /**
     * @var string[]
     */
    protected $cmd;
    /**
     * @var bool
     */
    protected $privileged;
    /**
     * @var string
     */
    protected $user;
    /**
     * @return bool
     */
    public function getAttachStdin()
    {
        return $this->attachStdin;
    }
    /**
     * @param bool $attachStdin
     *
     * @return self
     */
    public function setAttachStdin($attachStdin = null)
    {
        $this->attachStdin = $attachStdin;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachStdout()
    {
        return $this->attachStdout;
    }
    /**
     * @param bool $attachStdout
     *
     * @return self
     */
    public function setAttachStdout($attachStdout = null)
    {
        $this->attachStdout = $attachStdout;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttachStderr()
    {
        return $this->attachStderr;
    }
    /**
     * @param bool $attachStderr
     *
     * @return self
     */
    public function setAttachStderr($attachStderr = null)
    {
        $this->attachStderr = $attachStderr;
        return $this;
    }
    /**
     * @return string
     */
    public function getDetachKeys()
    {
        return $this->detachKeys;
    }
    /**
     * @param string $detachKeys
     *
     * @return self
     */
    public function setDetachKeys($detachKeys = null)
    {
        $this->detachKeys = $detachKeys;
        return $this;
    }
    /**
     * @return bool
     */
    public function getTty()
    {
        return $this->tty;
    }
    /**
     * @param bool $tty
     *
     * @return self
     */
    public function setTty($tty = null)
    {
        $this->tty = $tty;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getEnv()
    {
        return $this->env;
    }
    /**
     * @param string[] $env
     *
     * @return self
     */
    public function setEnv(array $env = null)
    {
        $this->env = $env;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getCmd()
    {
        return $this->cmd;
    }
    /**
     * @param string[] $cmd
     *
     * @return self
     */
    public function setCmd(array $cmd = null)
    {
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }
    /**
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged($privileged = null)
    {
        $this->privileged = $privileged;
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
}