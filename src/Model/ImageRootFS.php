<?php

namespace DockerPhpClient\Model;

class ImageRootFS
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $layers;
    /**
     * @var string
     */
    protected $baseLayer;
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
     * @return string[]
     */
    public function getLayers()
    {
        return $this->layers;
    }
    /**
     * @param string[] $layers
     *
     * @return self
     */
    public function setLayers(array $layers = null)
    {
        $this->layers = $layers;
        return $this;
    }
    /**
     * @return string
     */
    public function getBaseLayer()
    {
        return $this->baseLayer;
    }
    /**
     * @param string $baseLayer
     *
     * @return self
     */
    public function setBaseLayer($baseLayer = null)
    {
        $this->baseLayer = $baseLayer;
        return $this;
    }
}