<?php

namespace DockerPhpClient\Model;

class SystemDfResponse200
{
    /**
     * @var int
     */
    protected $layersSize;
    /**
     * @var ImageSummary[]
     */
    protected $images;
    /**
     * @var ContainerSummaryItem[][]
     */
    protected $containers;
    /**
     * @var Volume[]
     */
    protected $volumes;
    /**
     * @return int
     */
    public function getLayersSize()
    {
        return $this->layersSize;
    }
    /**
     * @param int $layersSize
     *
     * @return self
     */
    public function setLayersSize($layersSize = null)
    {
        $this->layersSize = $layersSize;
        return $this;
    }
    /**
     * @return ImageSummary[]
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * @param ImageSummary[] $images
     *
     * @return self
     */
    public function setImages(array $images = null)
    {
        $this->images = $images;
        return $this;
    }
    /**
     * @return ContainerSummaryItem[][]
     */
    public function getContainers()
    {
        return $this->containers;
    }
    /**
     * @param ContainerSummaryItem[][] $containers
     *
     * @return self
     */
    public function setContainers(array $containers = null)
    {
        $this->containers = $containers;
        return $this;
    }
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
}