<?php

namespace DockerPhpClient\Model;

class Image
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $repoTags;
    /**
     * @var string[]
     */
    protected $repoDigests;
    /**
     * @var string
     */
    protected $parent;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $container;
    /**
     * @var ContainerConfig
     */
    protected $containerConfig;
    /**
     * @var string
     */
    protected $dockerVersion;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var ContainerConfig
     */
    protected $config;
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var string
     */
    protected $osVersion;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $virtualSize;
    /**
     * @var GraphDriverData
     */
    protected $graphDriver;
    /**
     * @var ImageRootFS
     */
    protected $rootFS;
    /**
     * @var ImageMetadata
     */
    protected $metadata;
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getRepoTags()
    {
        return $this->repoTags;
    }
    /**
     * @param string[] $repoTags
     *
     * @return self
     */
    public function setRepoTags(array $repoTags = null)
    {
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getRepoDigests()
    {
        return $this->repoDigests;
    }
    /**
     * @param string[] $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(array $repoDigests = null)
    {
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * @param string $parent
     *
     * @return self
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;
        return $this;
    }
    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }
    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer($container = null)
    {
        $this->container = $container;
        return $this;
    }
    /**
     * @return ContainerConfig
     */
    public function getContainerConfig()
    {
        return $this->containerConfig;
    }
    /**
     * @param ContainerConfig $containerConfig
     *
     * @return self
     */
    public function setContainerConfig(ContainerConfig $containerConfig = null)
    {
        $this->containerConfig = $containerConfig;
        return $this;
    }
    /**
     * @return string
     */
    public function getDockerVersion()
    {
        return $this->dockerVersion;
    }
    /**
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion($dockerVersion = null)
    {
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @param string $author
     *
     * @return self
     */
    public function setAuthor($author = null)
    {
        $this->author = $author;
        return $this;
    }
    /**
     * @return ContainerConfig
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param ContainerConfig $config
     *
     * @return self
     */
    public function setConfig(ContainerConfig $config = null)
    {
        $this->config = $config;
        return $this;
    }
    /**
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }
    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture($architecture = null)
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * @param string $os
     *
     * @return self
     */
    public function setOs($os = null)
    {
        $this->os = $os;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }
    /**
     * @param string $osVersion
     *
     * @return self
     */
    public function setOsVersion($osVersion = null)
    {
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * @return int
     */
    public function getVirtualSize()
    {
        return $this->virtualSize;
    }
    /**
     * @param int $virtualSize
     *
     * @return self
     */
    public function setVirtualSize($virtualSize = null)
    {
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
     * @return GraphDriverData
     */
    public function getGraphDriver()
    {
        return $this->graphDriver;
    }
    /**
     * @param GraphDriverData $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(GraphDriverData $graphDriver = null)
    {
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * @return ImageRootFS
     */
    public function getRootFS()
    {
        return $this->rootFS;
    }
    /**
     * @param ImageRootFS $rootFS
     *
     * @return self
     */
    public function setRootFS(ImageRootFS $rootFS = null)
    {
        $this->rootFS = $rootFS;
        return $this;
    }
    /**
     * @return ImageMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @param ImageMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ImageMetadata $metadata = null)
    {
        $this->metadata = $metadata;
        return $this;
    }
}