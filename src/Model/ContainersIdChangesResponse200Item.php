<?php

namespace DockerPhpClient\Model;

class ContainersIdChangesResponse200Item
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $kind;
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param int $kind
     *
     * @return self
     */
    public function setKind($kind = null)
    {
        $this->kind = $kind;
        return $this;
    }
}